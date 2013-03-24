<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration,
    Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your need!
 */
class Version20130324015518 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql", "Migration can only be executed safely on 'mysql'.");
        
        $this->addSql("ALTER TABLE brewing CHANGE brewDate brewDate DATE DEFAULT NULL");
        $this->addSql("ALTER TABLE extract CHANGE id id TINYINT(1) NOT NULL");
        $this->addSql("ALTER TABLE extract_addition ADD CONSTRAINT FK_E85EEF956F015334 FOREIGN KEY (brewing_id) REFERENCES brewing (id)");
        $this->addSql("CREATE INDEX IDX_E85EEF956F015334 ON extract_addition (brewing_id)");
        $this->addSql("ALTER TABLE mash_steps ADD CONSTRAINT FK_19D5A1ED46565064 FOREIGN KEY (stepMashProfileID) REFERENCES mash_profiles (id)");
        $this->addSql("ALTER TABLE misc_addition ADD CONSTRAINT FK_8C60C3ED6F015334 FOREIGN KEY (brewing_id) REFERENCES brewing (id)");
        $this->addSql("CREATE INDEX IDX_8C60C3ED6F015334 ON misc_addition (brewing_id)");
        $this->addSql("ALTER TABLE users ADD salt VARCHAR(32) NOT NULL");
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql", "Migration can only be executed safely on 'mysql'.");
        
        $this->addSql("ALTER TABLE brewing CHANGE brewDate brewDate DATE NOT NULL");
        $this->addSql("ALTER TABLE extract CHANGE id id TINYINT(1) NOT NULL");
        $this->addSql("ALTER TABLE extract_addition DROP FOREIGN KEY FK_E85EEF956F015334");
        $this->addSql("DROP INDEX IDX_E85EEF956F015334 ON extract_addition");
        $this->addSql("ALTER TABLE mash_steps DROP FOREIGN KEY FK_19D5A1ED46565064");
        $this->addSql("ALTER TABLE misc_addition DROP FOREIGN KEY FK_8C60C3ED6F015334");
        $this->addSql("DROP INDEX IDX_8C60C3ED6F015334 ON misc_addition");
        $this->addSql("ALTER TABLE users DROP salt");
    }
}

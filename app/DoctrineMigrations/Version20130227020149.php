<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration,
    Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your need!
 */
class Version20130227020149 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql", "Migration can only be executed safely on 'mysql'.");
        
        $this->addSql("CREATE TABLE hop_addition (id INT AUTO_INCREMENT NOT NULL, brewing_id INT UNSIGNED DEFAULT NULL, name VARCHAR(250) DEFAULT NULL, weight DOUBLE PRECISION DEFAULT NULL, alpha_acid DOUBLE PRECISION DEFAULT NULL, time INT DEFAULT NULL, purpose VARCHAR(250) DEFAULT NULL, `use` VARCHAR(250) DEFAULT NULL, form VARCHAR(250) DEFAULT NULL, INDEX IDX_42CED9A86F015334 (brewing_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB");
        /** Do hop data migration here **/
        $brews = $this->connection->fetchAll("SELECT id, brewHops1, brewHops1Weight, brewHops1IBU, brewHops1Time, brewHops2, brewHops2Weight, brewHops2IBU, brewHops2Time, brewHops3, brewHops3Weight, brewHops3IBU, brewHops3Time, brewHops4, brewHops4Weight, brewHops4IBU, brewHops4Time, brewHops5, brewHops5Weight, brewHops5IBU, brewHops5Time, brewHops6, brewHops6Weight, brewHops6IBU, brewHops6Time, brewHops7, brewHops7Weight, brewHops7IBU, brewHops7Time, brewHops8, brewHops8Weight, brewHops8IBU, brewHops8Time, brewHops9, brewHops9Weight, brewHops9IBU, brewHops9Time, brewHops1Use, brewHops2Use, brewHops3Use, brewHops4Use, brewHops5Use, brewHops6Use, brewHops7Use, brewHops8Use, brewHops9Use, brewHops1Type, brewHops2Type, brewHops3Type, brewHops4Type, brewHops5Type, brewHops6Type, brewHops7Type, brewHops8Type, brewHops9Type, brewHops1Form, brewHops2Form, brewHops3Form, brewHops4Form, brewHops5Form, brewHops6Form, brewHops7Form, brewHops8Form, brewHops9Form, brewHops10, brewHops10Weight, brewHops10IBU, brewHops10Time, brewHops10Use, brewHops10Type, brewHops10Form, brewHops11, brewHops11Weight, brewHops11IBU, brewHops11Time, brewHops11Use, brewHops11Type, brewHops11Form, brewHops12, brewHops12Weight, brewHops12IBU, brewHops12Time, brewHops12Use, brewHops12Type, brewHops12Form, brewHops13, brewHops13Weight, brewHops13IBU, brewHops13Time, brewHops13Use, brewHops13Type, brewHops13Form, brewHops14, brewHops14Weight, brewHops14IBU, brewHops14Time, brewHops14Use, brewHops14Type, brewHops14Form, brewHops15, brewHops15Weight, brewHops15IBU, brewHops15Time, brewHops15Use, brewHops15Type, brewHops15Form FROM brewing");
        foreach ($brews as $brew) {
            for ($i=1; $i<=15; $i++) {
                $prefix = 'brewHops' . $i;
                if (!$brew[$prefix]) {
                    continue;
                }
                $this->addSql("INSERT INTO hop_addition (brewing_id, name, weight, alpha_acid, time, purpose, `use`, form) VALUES (?, ?, ?, ?, ?, ?, ?, ?)",
                               array($brew['id'], $brew[$prefix], $brew[$prefix . 'Weight'], $brew[$prefix . 'IBU'], $brew[$prefix . 'Time'], $brew[$prefix . 'Type'], $brew[$prefix . 'Use'], $brew[$prefix . 'Form']));
            }
        }
        $this->addSql("ALTER TABLE brewing DROP brewHops1, DROP brewHops1Weight, DROP brewHops1IBU, DROP brewHops1Time, DROP brewHops2, DROP brewHops2Weight, DROP brewHops2IBU, DROP brewHops2Time, DROP brewHops3, DROP brewHops3Weight, DROP brewHops3IBU, DROP brewHops3Time, DROP brewHops4, DROP brewHops4Weight, DROP brewHops4IBU, DROP brewHops4Time, DROP brewHops5, DROP brewHops5Weight, DROP brewHops5IBU, DROP brewHops5Time, DROP brewHops6, DROP brewHops6Weight, DROP brewHops6IBU, DROP brewHops6Time, DROP brewHops7, DROP brewHops7Weight, DROP brewHops7IBU, DROP brewHops7Time, DROP brewHops8, DROP brewHops8Weight, DROP brewHops8IBU, DROP brewHops8Time, DROP brewHops9, DROP brewHops9Weight, DROP brewHops9IBU, DROP brewHops9Time, DROP brewHops1Use, DROP brewHops2Use, DROP brewHops3Use, DROP brewHops4Use, DROP brewHops5Use, DROP brewHops6Use, DROP brewHops7Use, DROP brewHops8Use, DROP brewHops9Use, DROP brewHops1Type, DROP brewHops2Type, DROP brewHops3Type, DROP brewHops4Type, DROP brewHops5Type, DROP brewHops6Type, DROP brewHops7Type, DROP brewHops8Type, DROP brewHops9Type, DROP brewHops1Form, DROP brewHops2Form, DROP brewHops3Form, DROP brewHops4Form, DROP brewHops5Form, DROP brewHops6Form, DROP brewHops7Form, DROP brewHops8Form, DROP brewHops9Form, DROP brewHops10, DROP brewHops10Weight, DROP brewHops10IBU, DROP brewHops10Time, DROP brewHops10Use, DROP brewHops10Type, DROP brewHops10Form, DROP brewHops11, DROP brewHops11Weight, DROP brewHops11IBU, DROP brewHops11Time, DROP brewHops11Use, DROP brewHops11Type, DROP brewHops11Form, DROP brewHops12, DROP brewHops12Weight, DROP brewHops12IBU, DROP brewHops12Time, DROP brewHops12Use, DROP brewHops12Type, DROP brewHops12Form, DROP brewHops13, DROP brewHops13Weight, DROP brewHops13IBU, DROP brewHops13Time, DROP brewHops13Use, DROP brewHops13Type, DROP brewHops13Form, DROP brewHops14, DROP brewHops14Weight, DROP brewHops14IBU, DROP brewHops14Time, DROP brewHops14Use, DROP brewHops14Type, DROP brewHops14Form, DROP brewHops15, DROP brewHops15Weight, DROP brewHops15IBU, DROP brewHops15Time, DROP brewHops15Use, DROP brewHops15Type, DROP brewHops15Form");
    }

    public function down(Schema $schema)
    {
        $this->throwIrreversibleMigrationException();
    }
}

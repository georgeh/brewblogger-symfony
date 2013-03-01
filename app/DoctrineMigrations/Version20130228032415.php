<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration,
    Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your need!
 */
class Version20130228032415 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql", "Migration can only be executed safely on 'mysql'.");
        
        $this->addSql("CREATE TABLE adjunct_addition (id INT AUTO_INCREMENT NOT NULL, brewing_id INT DEFAULT NULL, adjunct_id INT DEFAULT NULL, name VARCHAR(250) DEFAULT NULL, weight DOUBLE PRECISION DEFAULT NULL, INDEX IDX_9F36657C6F015334 (brewing_id), INDEX IDX_9F36657CB26ADC31 (adjunct_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB");
        /** Do adjunct data migration here **/
        $brews = $this->connection->fetchAll("SELECT id, brewAddition1, brewAddition1Amt, brewAddition2, brewAddition2Amt, brewAddition3, brewAddition3Amt, brewAddition4, brewAddition4Amt, brewAddition5, brewAddition5Amt, brewAddition6, brewAddition6Amt, brewAddition7, brewAddition7Amt, brewAddition8, brewAddition8Amt, brewAddition9, brewAddition9Amt FROM brewing");
        foreach ($brews as $brew) {
            for ($i=1; $i<=9; $i++) {
                $prefix = 'brewAddition' . $i;
                if (!$brew[$prefix]) {
                    continue;
                }
                $this->addSql("INSERT INTO adjunct_addition (brewing_id, name, weight) VALUES (?, ?, ?)",
                               array($brew['id'], $brew[$prefix], $brew[$prefix . 'Amt']));
            }
        }        
        
        $this->addSql("CREATE TABLE extract_addition (id INT AUTO_INCREMENT NOT NULL, extract_id TINYINT(1) DEFAULT NULL, brewing_id INT DEFAULT NULL, name VARCHAR(250) DEFAULT NULL, weight DOUBLE PRECISION DEFAULT NULL, INDEX IDX_E85EEF95ACB5626C (extract_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB");
        /** Do extract data migration here **/
        $brews = $this->connection->fetchAll("SELECT id, brewExtract1, brewExtract1Weight, brewExtract2, brewExtract2Weight, brewExtract3, brewExtract3Weight, brewExtract4, brewExtract4Weight, brewExtract5, brewExtract5Weight FROM brewing");
        foreach ($brews as $brew) {
            for ($i=1; $i<=5; $i++) {
                $prefix = 'brewExtract' . $i;
                if (!$brew[$prefix]) {
                    continue;
                }
                $this->addSql("INSERT INTO adjunct_addition (brewing_id, name, weight) VALUES (?, ?, ?)",
                               array($brew['id'], $brew[$prefix], $brew[$prefix . 'Weight']));
            }
        }
        
        $this->addSql("CREATE TABLE misc_addition (id INT AUTO_INCREMENT NOT NULL, misc_id INT DEFAULT NULL, brewing_id INT DEFAULT NULL, name VARCHAR(250) DEFAULT NULL, type VARCHAR(250) DEFAULT NULL, `use` VARCHAR(250) DEFAULT NULL, time VARCHAR(250) DEFAULT NULL, weight VARCHAR(255) DEFAULT NULL, INDEX IDX_8C60C3ED56177219 (misc_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB");        
        /** Do adjunct data migration here **/
        $brews = $this->connection->fetchAll("SELECT id, brewMisc1Name, brewMisc2Name, brewMisc3Name, brewMisc4Name, brewMisc1Type, brewMisc2Type, brewMisc3Type, brewMisc4Type, brewMisc1Use, brewMisc2Use, brewMisc3Use, brewMisc4Use, brewMisc1Time, brewMisc2Time, brewMisc3Time, brewMisc4Time, brewMisc1Amount, brewMisc2Amount, brewMisc3Amount, brewMisc4Amount FROM brewing");
        foreach ($brews as $brew) {
            for ($i=1; $i<=4; $i++) {
                $prefix = 'brewMisc' . $i;
                if (!$brew[$prefix . 'Name']) {
                    continue;
                }
                $this->addSql("INSERT INTO misc_addition (brewing_id, name, type, `use`, time, weight) VALUES (?, ?, ?,?, ?, ?)",
                               array($brew['id'], $brew[$prefix . 'Name'], $brew[$prefix . 'Type'], $brew[$prefix . 'Use'], $brew[$prefix . 'Time'], $brew[$prefix . 'Amount']));
            }
        }
        
        $this->addSql('ALTER TABLE  `brewing` ENGINE = INNODB');
        $this->addSql("ALTER TABLE adjunct_addition ADD CONSTRAINT FK_9F36657C6F015334 FOREIGN KEY (brewing_id) REFERENCES brewing (id)");
        $this->addSql('ALTER TABLE  `adjuncts` ENGINE = INNODB');
        $this->addSql("ALTER TABLE adjunct_addition ADD CONSTRAINT FK_9F36657CB26ADC31 FOREIGN KEY (adjunct_id) REFERENCES adjuncts (id)");
        $this->addSql('ALTER TABLE  `extract` ENGINE = INNODB');
        $this->addSql("ALTER TABLE extract_addition ADD CONSTRAINT FK_E85EEF95ACB5626C FOREIGN KEY (extract_id) REFERENCES extract (id)");        
        $this->addSql('ALTER TABLE  `misc` ENGINE = INNODB');
        $this->addSql("ALTER TABLE misc_addition ADD CONSTRAINT FK_8C60C3ED56177219 FOREIGN KEY (misc_id) REFERENCES misc (id)");
        $this->addSql("ALTER TABLE brewing DROP brewExtract1, DROP brewExtract1Weight, DROP brewExtract2, DROP brewExtract2Weight, DROP brewExtract3, DROP brewExtract3Weight, DROP brewExtract4, DROP brewExtract4Weight, DROP brewExtract5, DROP brewExtract5Weight, DROP brewAddition1, DROP brewAddition1Amt, DROP brewAddition2, DROP brewAddition2Amt, DROP brewAddition3, DROP brewAddition3Amt, DROP brewAddition4, DROP brewAddition4Amt, DROP brewAddition5, DROP brewAddition5Amt, DROP brewAddition6, DROP brewAddition6Amt, DROP brewAddition7, DROP brewAddition7Amt, DROP brewAddition8, DROP brewAddition8Amt, DROP brewAddition9, DROP brewAddition9Amt, DROP brewMisc1Name, DROP brewMisc2Name, DROP brewMisc3Name, DROP brewMisc4Name, DROP brewMisc1Type, DROP brewMisc2Type, DROP brewMisc3Type, DROP brewMisc4Type, DROP brewMisc1Use, DROP brewMisc2Use, DROP brewMisc3Use, DROP brewMisc4Use, DROP brewMisc1Time, DROP brewMisc2Time, DROP brewMisc3Time, DROP brewMisc4Time, DROP brewMisc1Amount, DROP brewMisc2Amount, DROP brewMisc3Amount, DROP brewMisc4Amount");
        $this->addSql('ALTER TABLE  `yeast_profiles` ENGINE = INNODB');
        $this->addSql("ALTER TABLE brewing ADD CONSTRAINT FK_F3B0C1DBFBF0A2A FOREIGN KEY (brewYeastProfile) REFERENCES yeast_profiles (id)");
        $this->addSql('ALTER TABLE  `equip_profiles` ENGINE = INNODB');
        $this->addSql("ALTER TABLE brewing ADD CONSTRAINT FK_F3B0C1D3B63FA99 FOREIGN KEY (brewEquipProfile) REFERENCES equip_profiles (id)");
        $this->addSql('ALTER TABLE  `mash_profiles` ENGINE = INNODB');
        $this->addSql("ALTER TABLE brewing ADD CONSTRAINT FK_F3B0C1D4F3BB21E FOREIGN KEY (brewMashProfile) REFERENCES mash_profiles (id)");
        $this->addSql('ALTER TABLE  `water_profiles` ENGINE = INNODB');
        $this->addSql("ALTER TABLE brewing ADD CONSTRAINT FK_F3B0C1D3E65D266 FOREIGN KEY (brewWaterProfile) REFERENCES water_profiles (id)");        
        $this->addSql("ALTER TABLE grain_addition ADD CONSTRAINT FK_9763CBAF6F015334 FOREIGN KEY (brewing_id) REFERENCES brewing (id)");
        $this->addSql('ALTER TABLE  `malt` ENGINE = INNODB');
        $this->addSql("ALTER TABLE grain_addition ADD CONSTRAINT FK_9763CBAF953A9F01 FOREIGN KEY (malt_id) REFERENCES malt (id)");
        $this->addSql("CREATE INDEX IDX_9763CBAF6F015334 ON grain_addition (brewing_id)");
        $this->addSql("ALTER TABLE hop_addition ADD CONSTRAINT FK_42CED9A86F015334 FOREIGN KEY (brewing_id) REFERENCES brewing (id)");
        $this->addSql('ALTER TABLE  `hops` ENGINE = INNODB');
        $this->addSql("ALTER TABLE hop_addition ADD CONSTRAINT FK_42CED9A8C5CF93EC FOREIGN KEY (hops_id) REFERENCES hops (id)");
        $this->addSql('ALTER TABLE  `mash_profiles` ENGINE = INNODB');
        $this->addSql("ALTER TABLE mash_steps ADD CONSTRAINT FK_19D5A1ED46565064 FOREIGN KEY (stepMashProfileID) REFERENCES mash_profiles (id)");
    }

    public function down(Schema $schema)
    {
        $this->throwIrreversibleMigrationException();
    }
}

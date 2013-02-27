<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration,
    Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your need!
 */
class Version20130227005339 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql", "Migration can only be executed safely on 'mysql'.");
        
        $this->addSql("ALTER TABLE adjuncts CHANGE id id INT AUTO_INCREMENT NOT NULL, CHANGE adjunctPPG adjunctPPG NUMERIC(10, 0) NOT NULL, CHANGE adjunctLovibondLow adjunctLovibondLow NUMERIC(10, 0) NOT NULL, CHANGE adjunctLovibondHigh adjunctLovibondHigh NUMERIC(10, 0) NOT NULL");
        $this->addSql("ALTER TABLE brewing CHANGE brewDate brewDate DATE NOT NULL, CHANGE brewMashGrainTemp brewMashGrainTemp VARCHAR(2) DEFAULT NULL, CHANGE brewMashTunTemp brewMashTunTemp VARCHAR(3) DEFAULT NULL, CHANGE brewMashSpargeTemp brewMashSpargeTemp VARCHAR(3) DEFAULT NULL, CHANGE brewFeatured brewFeatured VARCHAR(1) DEFAULT NULL");
        $this->addSql("ALTER TABLE brewing ADD CONSTRAINT FK_F3B0C1DBFBF0A2A FOREIGN KEY (brewYeastProfile) REFERENCES yeast_profiles (id)");
        $this->addSql("ALTER TABLE brewing ADD CONSTRAINT FK_F3B0C1D3B63FA99 FOREIGN KEY (brewEquipProfile) REFERENCES equip_profiles (id)");
        $this->addSql("ALTER TABLE brewing ADD CONSTRAINT FK_F3B0C1D4F3BB21E FOREIGN KEY (brewMashProfile) REFERENCES mash_profiles (id)");
        $this->addSql("ALTER TABLE brewing ADD CONSTRAINT FK_F3B0C1D3E65D266 FOREIGN KEY (brewWaterProfile) REFERENCES water_profiles (id)");
        $this->addSql("CREATE INDEX IDX_F3B0C1DBFBF0A2A ON brewing (brewYeastProfile)");
        $this->addSql("CREATE INDEX IDX_F3B0C1D3B63FA99 ON brewing (brewEquipProfile)");
        $this->addSql("CREATE INDEX IDX_F3B0C1D4F3BB21E ON brewing (brewMashProfile)");
        $this->addSql("CREATE INDEX IDX_F3B0C1D3E65D266 ON brewing (brewWaterProfile)");
        $this->addSql("ALTER TABLE brewingcss CHANGE theme theme VARCHAR(250) NOT NULL");
        $this->addSql("ALTER TABLE extract CHANGE id id TINYINT(1) NOT NULL, CHANGE extractPPG extractPPG NUMERIC(10, 0) NOT NULL, CHANGE extractLME extractLME TINYINT(1) NOT NULL, CHANGE extractLovibondLow extractLovibondLow NUMERIC(10, 0) NOT NULL, CHANGE extractLovibondHigh extractLovibondHigh NUMERIC(10, 0) NOT NULL");
        $this->addSql("ALTER TABLE malt CHANGE id id INT AUTO_INCREMENT NOT NULL, CHANGE maltPPG maltPPG NUMERIC(10, 0) NOT NULL, CHANGE maltLovibondLow maltLovibondLow NUMERIC(10, 0) NOT NULL, CHANGE maltLovibondHigh maltLovibondHigh NUMERIC(10, 0) NOT NULL");
        $this->addSql("ALTER TABLE mash_steps ADD CONSTRAINT FK_19D5A1ED46565064 FOREIGN KEY (stepMashProfileID) REFERENCES mash_profiles (id)");
        $this->addSql("CREATE INDEX IDX_19D5A1ED46565064 ON mash_steps (stepMashProfileID)");
        $this->addSql("ALTER TABLE news CHANGE newsPrivate newsPrivate VARCHAR(1) DEFAULT NULL");
        $this->addSql("ALTER TABLE preferences CHANGE measAbbrev measAbbrev VARCHAR(1) DEFAULT NULL, CHANGE allowReviews allowReviews VARCHAR(1) DEFAULT NULL, CHANGE allowPrintLog allowPrintLog VARCHAR(1) DEFAULT NULL, CHANGE allowPrintRecipe allowPrintRecipe VARCHAR(1) DEFAULT NULL, CHANGE allowPrintXML allowPrintXML VARCHAR(1) DEFAULT NULL, CHANGE allowSpecifics allowSpecifics VARCHAR(1) DEFAULT NULL, CHANGE allowGeneral allowGeneral VARCHAR(1) DEFAULT NULL, CHANGE allowComments allowComments VARCHAR(1) DEFAULT NULL, CHANGE allowRecipe allowRecipe VARCHAR(1) DEFAULT NULL, CHANGE allowMash allowMash VARCHAR(1) DEFAULT NULL, CHANGE allowWater allowWater VARCHAR(1) DEFAULT NULL, CHANGE allowProcedure allowProcedure VARCHAR(1) DEFAULT NULL, CHANGE allowSpecialProcedure allowSpecialProcedure VARCHAR(1) DEFAULT NULL, CHANGE allowFermentation allowFermentation VARCHAR(1) DEFAULT NULL, CHANGE allowLabel allowLabel VARCHAR(1) DEFAULT NULL, CHANGE allowRelated allowRelated VARCHAR(1) DEFAULT NULL, CHANGE allowList allowList VARCHAR(1) DEFAULT NULL, CHANGE allowStatus allowStatus VARCHAR(1) DEFAULT NULL, CHANGE allowUpcoming allowUpcoming VARCHAR(1) DEFAULT NULL, CHANGE allowAwards allowAwards VARCHAR(1) DEFAULT NULL, CHANGE allowCalendar allowCalendar VARCHAR(1) DEFAULT NULL, CHANGE allowNews allowNews VARCHAR(1) DEFAULT NULL, CHANGE allowProfile allowProfile VARCHAR(1) DEFAULT NULL, CHANGE mode mode VARCHAR(1) DEFAULT NULL, CHANGE mashDisplayMethod mashDisplayMethod VARCHAR(1) DEFAULT NULL, CHANGE waterDisplayMethod waterDisplayMethod VARCHAR(1) DEFAULT NULL, CHANGE hopPelletFactor hopPelletFactor DOUBLE PRECISION NOT NULL");
        $this->addSql("ALTER TABLE recipes CHANGE brewFeatured brewFeatured VARCHAR(1) DEFAULT NULL");
        $this->addSql("ALTER TABLE reviews CHANGE brewID brewID TINYINT(1) DEFAULT NULL, CHANGE brewScoreDate brewScoreDate DATE DEFAULT NULL, CHANGE brewScorerLevel brewScorerLevel VARCHAR(255) DEFAULT NULL");
        $this->addSql("ALTER TABLE styles CHANGE brewStyleNum brewStyleNum VARCHAR(3) DEFAULT NULL, CHANGE brewStyleGroup brewStyleGroup VARCHAR(2) DEFAULT NULL");
        $this->addSql("ALTER TABLE upcoming CHANGE upcomingDate upcomingDate DATE DEFAULT NULL");
        $this->addSql("ALTER TABLE users CHANGE userLevel userLevel VARCHAR(1) DEFAULT NULL, CHANGE userInfoPrivate userInfoPrivate VARCHAR(1) DEFAULT NULL, CHANGE defaultBitternessFormula defaultBitternessFormula VARCHAR(50) NOT NULL, CHANGE defaultColorFormula defaultColorFormula VARCHAR(50) NOT NULL");
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql", "Migration can only be executed safely on 'mysql'.");
        
        $this->addSql("ALTER TABLE adjuncts CHANGE id id INT UNSIGNED AUTO_INCREMENT NOT NULL, CHANGE adjunctPPG adjunctPPG NUMERIC(5, 2) DEFAULT '0.00' NOT NULL, CHANGE adjunctLovibondLow adjunctLovibondLow NUMERIC(5, 2) DEFAULT '0.00' NOT NULL, CHANGE adjunctLovibondHigh adjunctLovibondHigh NUMERIC(5, 2) DEFAULT '0.00' NOT NULL");
        $this->addSql("ALTER TABLE brewing DROP FOREIGN KEY FK_F3B0C1DBFBF0A2A");
        $this->addSql("ALTER TABLE brewing DROP FOREIGN KEY FK_F3B0C1D3B63FA99");
        $this->addSql("ALTER TABLE brewing DROP FOREIGN KEY FK_F3B0C1D4F3BB21E");
        $this->addSql("ALTER TABLE brewing DROP FOREIGN KEY FK_F3B0C1D3E65D266");
        $this->addSql("DROP INDEX IDX_F3B0C1DBFBF0A2A ON brewing");
        $this->addSql("DROP INDEX IDX_F3B0C1D3B63FA99 ON brewing");
        $this->addSql("DROP INDEX IDX_F3B0C1D4F3BB21E ON brewing");
        $this->addSql("DROP INDEX IDX_F3B0C1D3E65D266 ON brewing");
        $this->addSql("ALTER TABLE brewing CHANGE brewDate brewDate DATE DEFAULT '0000-00-00' NOT NULL, CHANGE brewMashGrainTemp brewMashGrainTemp CHAR(2) DEFAULT NULL, CHANGE brewMashTunTemp brewMashTunTemp CHAR(3) DEFAULT NULL, CHANGE brewMashSpargeTemp brewMashSpargeTemp CHAR(3) DEFAULT NULL, CHANGE brewFeatured brewFeatured CHAR(1) DEFAULT NULL");
        $this->addSql("ALTER TABLE brewingcss CHANGE theme theme VARCHAR(250) DEFAULT '0' NOT NULL");
        $this->addSql("ALTER TABLE extract CHANGE id id TINYINT(1) NOT NULL, CHANGE extractPPG extractPPG NUMERIC(5, 2) DEFAULT '0.00' NOT NULL, CHANGE extractLME extractLME TINYINT(1) DEFAULT '0' NOT NULL, CHANGE extractLovibondLow extractLovibondLow NUMERIC(5, 2) DEFAULT '0.00' NOT NULL, CHANGE extractLovibondHigh extractLovibondHigh NUMERIC(5, 2) DEFAULT '0.00' NOT NULL");
        $this->addSql("ALTER TABLE malt CHANGE id id INT UNSIGNED AUTO_INCREMENT NOT NULL, CHANGE maltPPG maltPPG NUMERIC(5, 2) DEFAULT '0.00' NOT NULL, CHANGE maltLovibondLow maltLovibondLow NUMERIC(5, 2) DEFAULT '0.00' NOT NULL, CHANGE maltLovibondHigh maltLovibondHigh NUMERIC(5, 2) DEFAULT '0.00' NOT NULL");
        $this->addSql("ALTER TABLE mash_steps DROP FOREIGN KEY FK_19D5A1ED46565064");
        $this->addSql("DROP INDEX IDX_19D5A1ED46565064 ON mash_steps");
        $this->addSql("ALTER TABLE news CHANGE newsPrivate newsPrivate CHAR(1) DEFAULT NULL");
        $this->addSql("ALTER TABLE preferences CHANGE measAbbrev measAbbrev CHAR(1) DEFAULT NULL, CHANGE allowReviews allowReviews CHAR(1) DEFAULT NULL, CHANGE allowPrintLog allowPrintLog CHAR(1) DEFAULT NULL, CHANGE allowPrintRecipe allowPrintRecipe CHAR(1) DEFAULT NULL, CHANGE allowPrintXML allowPrintXML CHAR(1) DEFAULT NULL, CHANGE allowSpecifics allowSpecifics CHAR(1) DEFAULT NULL, CHANGE allowGeneral allowGeneral CHAR(1) DEFAULT NULL, CHANGE allowComments allowComments CHAR(1) DEFAULT NULL, CHANGE allowRecipe allowRecipe CHAR(1) DEFAULT NULL, CHANGE allowMash allowMash CHAR(1) DEFAULT NULL, CHANGE allowWater allowWater CHAR(1) DEFAULT NULL, CHANGE allowProcedure allowProcedure CHAR(1) DEFAULT NULL, CHANGE allowSpecialProcedure allowSpecialProcedure CHAR(1) DEFAULT NULL, CHANGE allowFermentation allowFermentation CHAR(1) DEFAULT NULL, CHANGE allowLabel allowLabel CHAR(1) DEFAULT NULL, CHANGE allowRelated allowRelated CHAR(1) DEFAULT NULL, CHANGE allowList allowList CHAR(1) DEFAULT NULL, CHANGE allowStatus allowStatus CHAR(1) DEFAULT NULL, CHANGE allowUpcoming allowUpcoming CHAR(1) DEFAULT NULL, CHANGE allowAwards allowAwards CHAR(1) DEFAULT NULL, CHANGE allowCalendar allowCalendar CHAR(1) DEFAULT NULL, CHANGE allowNews allowNews CHAR(1) DEFAULT NULL, CHANGE allowProfile allowProfile CHAR(1) DEFAULT NULL, CHANGE mode mode CHAR(1) DEFAULT NULL, CHANGE mashDisplayMethod mashDisplayMethod CHAR(1) DEFAULT NULL, CHANGE waterDisplayMethod waterDisplayMethod CHAR(1) DEFAULT NULL, CHANGE hopPelletFactor hopPelletFactor DOUBLE PRECISION DEFAULT '1.06' NOT NULL COMMENT 'Pellet factor compared to whole/plug'");
        $this->addSql("ALTER TABLE recipes CHANGE brewFeatured brewFeatured CHAR(1) DEFAULT NULL");
        $this->addSql("ALTER TABLE reviews CHANGE brewID brewID TINYINT(1) DEFAULT '0', CHANGE brewScoreDate brewScoreDate DATE DEFAULT '0000-00-00', CHANGE brewScorerLevel brewScorerLevel VARCHAR(255) DEFAULT 'friend'");
        $this->addSql("ALTER TABLE styles CHANGE brewStyleNum brewStyleNum CHAR(3) DEFAULT NULL, CHANGE brewStyleGroup brewStyleGroup CHAR(2) DEFAULT NULL");
        $this->addSql("ALTER TABLE upcoming CHANGE upcomingDate upcomingDate DATE DEFAULT '0000-00-00'");
        $this->addSql("ALTER TABLE users CHANGE userLevel userLevel CHAR(1) DEFAULT NULL, CHANGE userInfoPrivate userInfoPrivate CHAR(1) DEFAULT NULL, CHANGE defaultBitternessFormula defaultBitternessFormula VARCHAR(50) DEFAULT 'Tinseth' NOT NULL, CHANGE defaultColorFormula defaultColorFormula VARCHAR(50) DEFAULT 'Morey' NOT NULL");
    }
}

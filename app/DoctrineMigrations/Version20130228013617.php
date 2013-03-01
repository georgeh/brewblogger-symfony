<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration,
    Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your need!
 */
class Version20130228013617 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql", "Migration can only be executed safely on 'mysql'.");
        
        $this->addSql("CREATE TABLE grain_addition (id INT AUTO_INCREMENT NOT NULL, malt_id INT DEFAULT NULL, brewing_id INT DEFAULT NULL, name VARCHAR(250) DEFAULT NULL, weight DOUBLE PRECISION DEFAULT NULL, INDEX IDX_9763CBAF953A9F01 (malt_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB");
        /** Do grain data migration here **/
        $brews = $this->connection->fetchAll("SELECT id, brewGrain1, brewGrain1Weight, brewGrain2, brewGrain2Weight, brewGrain3, brewGrain3Weight, brewGrain4, brewGrain4Weight, brewGrain5, brewGrain5Weight, brewGrain6, brewGrain6Weight, brewGrain7, brewGrain7Weight, brewGrain8, brewGrain8Weight, brewGrain9, brewGrain9Weight, brewGrain10, brewGrain10Weight, brewGrain11, brewGrain11Weight, brewGrain12, brewGrain12Weight, brewGrain13, brewGrain13Weight, brewGrain14, brewGrain14Weight, brewGrain15, brewGrain15Weight FROM brewing");
        foreach ($brews as $brew) {
            for ($i=1; $i<=15; $i++) {
                $prefix = 'brewGrain' . $i;
                if (!$brew[$prefix]) {
                    continue;
                }
                $this->addSql("INSERT INTO grain_addition (brewing_id, name, weight) VALUES (?, ?, ?)",
                               array($brew['id'], $brew[$prefix], $brew[$prefix . 'Weight']));
            }
        }
        
        $this->addSql("ALTER TABLE brewing DROP brewGrain1, DROP brewGrain1Weight, DROP brewGrain2, DROP brewGrain2Weight, DROP brewGrain3, DROP brewGrain3Weight, DROP brewGrain4, DROP brewGrain4Weight, DROP brewGrain5, DROP brewGrain5Weight, DROP brewGrain6, DROP brewGrain6Weight, DROP brewGrain7, DROP brewGrain7Weight, DROP brewGrain8, DROP brewGrain8Weight, DROP brewGrain9, DROP brewGrain9Weight, DROP brewGrain10, DROP brewGrain10Weight, DROP brewGrain11, DROP brewGrain11Weight, DROP brewGrain12, DROP brewGrain12Weight, DROP brewGrain13, DROP brewGrain13Weight, DROP brewGrain14, DROP brewGrain14Weight, DROP brewGrain15, DROP brewGrain15Weight, DROP brewYeast, DROP brewYeastMan, DROP brewYeastForm, DROP brewYeastType, DROP brewMashGrainTemp, DROP brewMashTunTemp, DROP brewMashSpargeTemp, DROP brewMashEquipAdjust, DROP brewMashPH, DROP brewMashStep1Name, DROP brewMashStep1Desc, DROP brewMashStep1Temp, DROP brewMashStep1Time, DROP brewMashStep2Name, DROP brewMashStep2Desc, DROP brewMashStep2Temp, DROP brewMashStep2Time, DROP brewMashStep3Name, DROP brewMashStep3Desc, DROP brewMashStep3Temp, DROP brewMashStep3Time, DROP brewMashStep4Name, DROP brewMashStep4Desc, DROP brewMashStep4Temp, DROP brewMashStep4Time, DROP brewMashStep5Name, DROP brewMashStep5Desc, DROP brewMashStep5Temp, DROP brewMashStep5Time, DROP brewWaterName, DROP brewWaterAmount, DROP brewWaterCalcium, DROP brewWaterBicarb, DROP brewWaterSulfate, DROP brewWaterChloride, DROP brewWaterMagnesium, DROP brewWaterPH, DROP brewWaterNotes, DROP brewWaterSodium");
        $this->addSql("ALTER TABLE hop_addition ADD hops_id INT DEFAULT NULL, CHANGE brewing_id brewing_id INT DEFAULT NULL");
        $this->addSql("CREATE INDEX IDX_42CED9A8C5CF93EC ON hop_addition (hops_id)");
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql", "Migration can only be executed safely on 'mysql'.");
        
        $this->addSql("DROP TABLE grain_addition");
        $this->addSql("ALTER TABLE brewing ADD brewGrain1 VARCHAR(100) DEFAULT NULL, ADD brewGrain1Weight VARCHAR(10) DEFAULT NULL, ADD brewGrain2 VARCHAR(100) DEFAULT NULL, ADD brewGrain2Weight VARCHAR(10) DEFAULT NULL, ADD brewGrain3 VARCHAR(100) DEFAULT NULL, ADD brewGrain3Weight VARCHAR(10) DEFAULT NULL, ADD brewGrain4 VARCHAR(100) DEFAULT NULL, ADD brewGrain4Weight VARCHAR(10) DEFAULT NULL, ADD brewGrain5 VARCHAR(100) DEFAULT NULL, ADD brewGrain5Weight VARCHAR(4) DEFAULT NULL, ADD brewGrain6 VARCHAR(100) DEFAULT NULL, ADD brewGrain6Weight VARCHAR(10) DEFAULT NULL, ADD brewGrain7 VARCHAR(100) DEFAULT NULL, ADD brewGrain7Weight VARCHAR(10) DEFAULT NULL, ADD brewGrain8 VARCHAR(100) DEFAULT NULL, ADD brewGrain8Weight VARCHAR(10) DEFAULT NULL, ADD brewGrain9 VARCHAR(100) DEFAULT NULL, ADD brewGrain9Weight VARCHAR(10) DEFAULT NULL, ADD brewGrain10 VARCHAR(100) DEFAULT NULL, ADD brewGrain10Weight VARCHAR(10) DEFAULT NULL, ADD brewGrain11 VARCHAR(100) DEFAULT NULL, ADD brewGrain11Weight VARCHAR(10) DEFAULT NULL, ADD brewGrain12 VARCHAR(100) DEFAULT NULL, ADD brewGrain12Weight VARCHAR(10) DEFAULT NULL, ADD brewGrain13 VARCHAR(100) DEFAULT NULL, ADD brewGrain13Weight VARCHAR(10) DEFAULT NULL, ADD brewGrain14 VARCHAR(100) DEFAULT NULL, ADD brewGrain14Weight VARCHAR(10) DEFAULT NULL, ADD brewGrain15 VARCHAR(100) DEFAULT NULL, ADD brewGrain15Weight VARCHAR(10) DEFAULT NULL, ADD brewYeast VARCHAR(250) DEFAULT NULL, ADD brewYeastMan VARCHAR(250) DEFAULT NULL, ADD brewYeastForm VARCHAR(25) DEFAULT NULL, ADD brewYeastType VARCHAR(25) DEFAULT NULL, ADD brewMashGrainTemp VARCHAR(2) DEFAULT NULL, ADD brewMashTunTemp VARCHAR(3) DEFAULT NULL, ADD brewMashSpargeTemp VARCHAR(3) DEFAULT NULL, ADD brewMashEquipAdjust VARCHAR(10) DEFAULT NULL, ADD brewMashPH VARCHAR(5) DEFAULT NULL, ADD brewMashStep1Name VARCHAR(250) DEFAULT NULL, ADD brewMashStep1Desc VARCHAR(250) DEFAULT NULL, ADD brewMashStep1Temp VARCHAR(10) DEFAULT NULL, ADD brewMashStep1Time VARCHAR(10) DEFAULT NULL, ADD brewMashStep2Name VARCHAR(250) DEFAULT NULL, ADD brewMashStep2Desc VARCHAR(250) DEFAULT NULL, ADD brewMashStep2Temp VARCHAR(10) DEFAULT NULL, ADD brewMashStep2Time VARCHAR(10) DEFAULT NULL, ADD brewMashStep3Name VARCHAR(250) DEFAULT NULL, ADD brewMashStep3Desc VARCHAR(250) DEFAULT NULL, ADD brewMashStep3Temp VARCHAR(10) DEFAULT NULL, ADD brewMashStep3Time VARCHAR(10) DEFAULT NULL, ADD brewMashStep4Name VARCHAR(250) DEFAULT NULL, ADD brewMashStep4Desc VARCHAR(250) DEFAULT NULL, ADD brewMashStep4Temp VARCHAR(10) DEFAULT NULL, ADD brewMashStep4Time VARCHAR(10) DEFAULT NULL, ADD brewMashStep5Name VARCHAR(250) DEFAULT NULL, ADD brewMashStep5Desc VARCHAR(250) DEFAULT NULL, ADD brewMashStep5Temp VARCHAR(10) DEFAULT NULL, ADD brewMashStep5Time VARCHAR(10) DEFAULT NULL, ADD brewWaterName VARCHAR(250) DEFAULT NULL, ADD brewWaterAmount VARCHAR(25) DEFAULT NULL, ADD brewWaterCalcium VARCHAR(25) DEFAULT NULL, ADD brewWaterBicarb VARCHAR(25) DEFAULT NULL, ADD brewWaterSulfate VARCHAR(25) DEFAULT NULL, ADD brewWaterChloride VARCHAR(25) DEFAULT NULL, ADD brewWaterMagnesium VARCHAR(25) DEFAULT NULL, ADD brewWaterPH VARCHAR(25) DEFAULT NULL, ADD brewWaterNotes LONGTEXT DEFAULT NULL, ADD brewWaterSodium VARCHAR(25) DEFAULT NULL");
        $this->addSql("DROP INDEX IDX_42CED9A8C5CF93EC ON hop_addition");
    }
}

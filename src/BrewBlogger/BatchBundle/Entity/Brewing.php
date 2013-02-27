<?php

namespace BrewBlogger\BatchBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Brewing
 *
 * @ORM\Table(name="brewing")
 * @ORM\Entity
 */
class Brewing
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="brewName", type="string", length=250, nullable=true)
     */
    private $brewname;

    /**
     * @var string
     *
     * @ORM\Column(name="brewStyle", type="string", length=250, nullable=true)
     */
    private $brewstyle;

    /**
     * @var string
     *
     * @ORM\Column(name="brewBatchNum", type="string", length=100, nullable=true)
     */
    private $brewbatchnum;

    /**
     * @var string
     *
     * @ORM\Column(name="brewCondition", type="string", length=100, nullable=true)
     */
    private $brewcondition;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="brewDate", type="date", nullable=false)
     */
    private $brewdate;

    /**
     * @var string
     *
     * @ORM\Column(name="brewYield", type="string", length=10, nullable=true)
     */
    private $brewyield;

    /**
     * @var string
     *
     * @ORM\Column(name="brewMethod", type="string", length=200, nullable=true)
     */
    private $brewmethod;

    /**
     * @var string
     *
     * @ORM\Column(name="brewCost", type="string", length=10, nullable=true)
     */
    private $brewcost;

    /**
     * @var string
     *
     * @ORM\Column(name="brewLink1", type="string", length=250, nullable=true)
     */
    private $brewlink1;

    /**
     * @var string
     *
     * @ORM\Column(name="brewLink1Name", type="string", length=250, nullable=true)
     */
    private $brewlink1name;

    /**
     * @var string
     *
     * @ORM\Column(name="brewLink2", type="string", length=250, nullable=true)
     */
    private $brewlink2;

    /**
     * @var string
     *
     * @ORM\Column(name="brewLink2Name", type="string", length=250, nullable=true)
     */
    private $brewlink2name;

    /**
     * @var string
     *
     * @ORM\Column(name="brewInfo", type="text", nullable=true)
     */
    private $brewinfo;

    /**
     * @var string
     *
     * @ORM\Column(name="brewExtract1", type="string", length=100, nullable=true)
     */
    private $brewextract1;

    /**
     * @var string
     *
     * @ORM\Column(name="brewExtract1Weight", type="string", length=10, nullable=true)
     */
    private $brewextract1weight;

    /**
     * @var string
     *
     * @ORM\Column(name="brewExtract2", type="string", length=100, nullable=true)
     */
    private $brewextract2;

    /**
     * @var string
     *
     * @ORM\Column(name="brewExtract2Weight", type="string", length=10, nullable=true)
     */
    private $brewextract2weight;

    /**
     * @var string
     *
     * @ORM\Column(name="brewExtract3", type="string", length=100, nullable=true)
     */
    private $brewextract3;

    /**
     * @var string
     *
     * @ORM\Column(name="brewExtract3Weight", type="string", length=4, nullable=true)
     */
    private $brewextract3weight;

    /**
     * @var string
     *
     * @ORM\Column(name="brewExtract4", type="string", length=100, nullable=true)
     */
    private $brewextract4;

    /**
     * @var string
     *
     * @ORM\Column(name="brewExtract4Weight", type="string", length=10, nullable=true)
     */
    private $brewextract4weight;

    /**
     * @var string
     *
     * @ORM\Column(name="brewExtract5", type="string", length=100, nullable=true)
     */
    private $brewextract5;

    /**
     * @var string
     *
     * @ORM\Column(name="brewExtract5Weight", type="string", length=10, nullable=true)
     */
    private $brewextract5weight;

    /**
     * @var string
     *
     * @ORM\Column(name="brewGrain1", type="string", length=100, nullable=true)
     */
    private $brewgrain1;

    /**
     * @var string
     *
     * @ORM\Column(name="brewGrain1Weight", type="string", length=10, nullable=true)
     */
    private $brewgrain1weight;

    /**
     * @var string
     *
     * @ORM\Column(name="brewGrain2", type="string", length=100, nullable=true)
     */
    private $brewgrain2;

    /**
     * @var string
     *
     * @ORM\Column(name="brewGrain2Weight", type="string", length=10, nullable=true)
     */
    private $brewgrain2weight;

    /**
     * @var string
     *
     * @ORM\Column(name="brewGrain3", type="string", length=100, nullable=true)
     */
    private $brewgrain3;

    /**
     * @var string
     *
     * @ORM\Column(name="brewGrain3Weight", type="string", length=10, nullable=true)
     */
    private $brewgrain3weight;

    /**
     * @var string
     *
     * @ORM\Column(name="brewGrain4", type="string", length=100, nullable=true)
     */
    private $brewgrain4;

    /**
     * @var string
     *
     * @ORM\Column(name="brewGrain4Weight", type="string", length=10, nullable=true)
     */
    private $brewgrain4weight;

    /**
     * @var string
     *
     * @ORM\Column(name="brewGrain5", type="string", length=100, nullable=true)
     */
    private $brewgrain5;

    /**
     * @var string
     *
     * @ORM\Column(name="brewGrain5Weight", type="string", length=4, nullable=true)
     */
    private $brewgrain5weight;

    /**
     * @var string
     *
     * @ORM\Column(name="brewGrain6", type="string", length=100, nullable=true)
     */
    private $brewgrain6;

    /**
     * @var string
     *
     * @ORM\Column(name="brewGrain6Weight", type="string", length=10, nullable=true)
     */
    private $brewgrain6weight;

    /**
     * @var string
     *
     * @ORM\Column(name="brewGrain7", type="string", length=100, nullable=true)
     */
    private $brewgrain7;

    /**
     * @var string
     *
     * @ORM\Column(name="brewGrain7Weight", type="string", length=10, nullable=true)
     */
    private $brewgrain7weight;

    /**
     * @var string
     *
     * @ORM\Column(name="brewGrain8", type="string", length=100, nullable=true)
     */
    private $brewgrain8;

    /**
     * @var string
     *
     * @ORM\Column(name="brewGrain8Weight", type="string", length=10, nullable=true)
     */
    private $brewgrain8weight;

    /**
     * @var string
     *
     * @ORM\Column(name="brewGrain9", type="string", length=100, nullable=true)
     */
    private $brewgrain9;

    /**
     * @var string
     *
     * @ORM\Column(name="brewGrain9Weight", type="string", length=10, nullable=true)
     */
    private $brewgrain9weight;

    /**
     * @var string
     *
     * @ORM\Column(name="brewGrain10", type="string", length=100, nullable=true)
     */
    private $brewgrain10;

    /**
     * @var string
     *
     * @ORM\Column(name="brewGrain10Weight", type="string", length=10, nullable=true)
     */
    private $brewgrain10weight;

    /**
     * @var string
     *
     * @ORM\Column(name="brewGrain11", type="string", length=100, nullable=true)
     */
    private $brewgrain11;

    /**
     * @var string
     *
     * @ORM\Column(name="brewGrain11Weight", type="string", length=10, nullable=true)
     */
    private $brewgrain11weight;

    /**
     * @var string
     *
     * @ORM\Column(name="brewGrain12", type="string", length=100, nullable=true)
     */
    private $brewgrain12;

    /**
     * @var string
     *
     * @ORM\Column(name="brewGrain12Weight", type="string", length=10, nullable=true)
     */
    private $brewgrain12weight;

    /**
     * @var string
     *
     * @ORM\Column(name="brewGrain13", type="string", length=100, nullable=true)
     */
    private $brewgrain13;

    /**
     * @var string
     *
     * @ORM\Column(name="brewGrain13Weight", type="string", length=10, nullable=true)
     */
    private $brewgrain13weight;

    /**
     * @var string
     *
     * @ORM\Column(name="brewGrain14", type="string", length=100, nullable=true)
     */
    private $brewgrain14;

    /**
     * @var string
     *
     * @ORM\Column(name="brewGrain14Weight", type="string", length=10, nullable=true)
     */
    private $brewgrain14weight;

    /**
     * @var string
     *
     * @ORM\Column(name="brewGrain15", type="string", length=100, nullable=true)
     */
    private $brewgrain15;

    /**
     * @var string
     *
     * @ORM\Column(name="brewGrain15Weight", type="string", length=10, nullable=true)
     */
    private $brewgrain15weight;

    /**
     * @var string
     *
     * @ORM\Column(name="brewAddition1", type="string", length=100, nullable=true)
     */
    private $brewaddition1;

    /**
     * @var string
     *
     * @ORM\Column(name="brewAddition1Amt", type="string", length=20, nullable=true)
     */
    private $brewaddition1amt;

    /**
     * @var string
     *
     * @ORM\Column(name="brewAddition2", type="string", length=100, nullable=true)
     */
    private $brewaddition2;

    /**
     * @var string
     *
     * @ORM\Column(name="brewAddition2Amt", type="string", length=20, nullable=true)
     */
    private $brewaddition2amt;

    /**
     * @var string
     *
     * @ORM\Column(name="brewAddition3", type="string", length=100, nullable=true)
     */
    private $brewaddition3;

    /**
     * @var string
     *
     * @ORM\Column(name="brewAddition3Amt", type="string", length=20, nullable=true)
     */
    private $brewaddition3amt;

    /**
     * @var string
     *
     * @ORM\Column(name="brewAddition4", type="string", length=100, nullable=true)
     */
    private $brewaddition4;

    /**
     * @var string
     *
     * @ORM\Column(name="brewAddition4Amt", type="string", length=20, nullable=true)
     */
    private $brewaddition4amt;

    /**
     * @var string
     *
     * @ORM\Column(name="brewAddition5", type="string", length=100, nullable=true)
     */
    private $brewaddition5;

    /**
     * @var string
     *
     * @ORM\Column(name="brewAddition5Amt", type="string", length=20, nullable=true)
     */
    private $brewaddition5amt;

    /**
     * @var string
     *
     * @ORM\Column(name="brewAddition6", type="string", length=100, nullable=true)
     */
    private $brewaddition6;

    /**
     * @var string
     *
     * @ORM\Column(name="brewAddition6Amt", type="string", length=20, nullable=true)
     */
    private $brewaddition6amt;

    /**
     * @var string
     *
     * @ORM\Column(name="brewAddition7", type="string", length=100, nullable=true)
     */
    private $brewaddition7;

    /**
     * @var string
     *
     * @ORM\Column(name="brewAddition7Amt", type="string", length=20, nullable=true)
     */
    private $brewaddition7amt;

    /**
     * @var string
     *
     * @ORM\Column(name="brewAddition8", type="string", length=100, nullable=true)
     */
    private $brewaddition8;

    /**
     * @var string
     *
     * @ORM\Column(name="brewAddition8Amt", type="string", length=20, nullable=true)
     */
    private $brewaddition8amt;

    /**
     * @var string
     *
     * @ORM\Column(name="brewAddition9", type="string", length=100, nullable=true)
     */
    private $brewaddition9;

    /**
     * @var string
     *
     * @ORM\Column(name="brewAddition9Amt", type="string", length=20, nullable=true)
     */
    private $brewaddition9amt;

    /**
     * @var string
     *
     * @ORM\Column(name="brewMisc1Name", type="string", length=250, nullable=true)
     */
    private $brewmisc1name;

    /**
     * @var string
     *
     * @ORM\Column(name="brewMisc2Name", type="string", length=250, nullable=true)
     */
    private $brewmisc2name;

    /**
     * @var string
     *
     * @ORM\Column(name="brewMisc3Name", type="string", length=250, nullable=true)
     */
    private $brewmisc3name;

    /**
     * @var string
     *
     * @ORM\Column(name="brewMisc4Name", type="string", length=250, nullable=true)
     */
    private $brewmisc4name;

    /**
     * @var string
     *
     * @ORM\Column(name="brewMisc1Type", type="string", length=25, nullable=true)
     */
    private $brewmisc1type;

    /**
     * @var string
     *
     * @ORM\Column(name="brewMisc2Type", type="string", length=25, nullable=true)
     */
    private $brewmisc2type;

    /**
     * @var string
     *
     * @ORM\Column(name="brewMisc3Type", type="string", length=25, nullable=true)
     */
    private $brewmisc3type;

    /**
     * @var string
     *
     * @ORM\Column(name="brewMisc4Type", type="string", length=25, nullable=true)
     */
    private $brewmisc4type;

    /**
     * @var string
     *
     * @ORM\Column(name="brewMisc1Use", type="string", length=25, nullable=true)
     */
    private $brewmisc1use;

    /**
     * @var string
     *
     * @ORM\Column(name="brewMisc2Use", type="string", length=25, nullable=true)
     */
    private $brewmisc2use;

    /**
     * @var string
     *
     * @ORM\Column(name="brewMisc3Use", type="string", length=25, nullable=true)
     */
    private $brewmisc3use;

    /**
     * @var string
     *
     * @ORM\Column(name="brewMisc4Use", type="string", length=25, nullable=true)
     */
    private $brewmisc4use;

    /**
     * @var string
     *
     * @ORM\Column(name="brewMisc1Time", type="string", length=25, nullable=true)
     */
    private $brewmisc1time;

    /**
     * @var string
     *
     * @ORM\Column(name="brewMisc2Time", type="string", length=25, nullable=true)
     */
    private $brewmisc2time;

    /**
     * @var string
     *
     * @ORM\Column(name="brewMisc3Time", type="string", length=25, nullable=true)
     */
    private $brewmisc3time;

    /**
     * @var string
     *
     * @ORM\Column(name="brewMisc4Time", type="string", length=25, nullable=true)
     */
    private $brewmisc4time;

    /**
     * @var string
     *
     * @ORM\Column(name="brewMisc1Amount", type="string", length=25, nullable=true)
     */
    private $brewmisc1amount;

    /**
     * @var string
     *
     * @ORM\Column(name="brewMisc2Amount", type="string", length=25, nullable=true)
     */
    private $brewmisc2amount;

    /**
     * @var string
     *
     * @ORM\Column(name="brewMisc3Amount", type="string", length=25, nullable=true)
     */
    private $brewmisc3amount;

    /**
     * @var string
     *
     * @ORM\Column(name="brewMisc4Amount", type="string", length=25, nullable=true)
     */
    private $brewmisc4amount;

    /**
     * @var string
     *
     * @ORM\Column(name="brewYeast", type="string", length=250, nullable=true)
     */
    private $brewyeast;

    /**
     * @var string
     *
     * @ORM\Column(name="brewYeastMan", type="string", length=250, nullable=true)
     */
    private $brewyeastman;

    /**
     * @var string
     *
     * @ORM\Column(name="brewYeastForm", type="string", length=25, nullable=true)
     */
    private $brewyeastform;

    /**
     * @var string
     *
     * @ORM\Column(name="brewYeastType", type="string", length=25, nullable=true)
     */
    private $brewyeasttype;

    /**
     * @var string
     *
     * @ORM\Column(name="brewYeastAmount", type="string", length=25, nullable=true)
     */
    private $brewyeastamount;

    /**
     * @var string
     *
     * @ORM\Column(name="brewLabelImage", type="string", length=250, nullable=true)
     */
    private $brewlabelimage;

    /**
     * @var string
     *
     * @ORM\Column(name="brewOG", type="string", length=10, nullable=true)
     */
    private $brewog;

    /**
     * @var string
     *
     * @ORM\Column(name="brewFG", type="string", length=10, nullable=true)
     */
    private $brewfg;

    /**
     * @var string
     *
     * @ORM\Column(name="brewGravity1", type="string", length=10, nullable=true)
     */
    private $brewgravity1;

    /**
     * @var string
     *
     * @ORM\Column(name="brewGravity1Days", type="string", length=10, nullable=true)
     */
    private $brewgravity1days;

    /**
     * @var string
     *
     * @ORM\Column(name="brewGravity2", type="string", length=10, nullable=true)
     */
    private $brewgravity2;

    /**
     * @var string
     *
     * @ORM\Column(name="brewGravity2Days", type="string", length=10, nullable=true)
     */
    private $brewgravity2days;

    /**
     * @var string
     *
     * @ORM\Column(name="brewProcedure", type="text", nullable=true)
     */
    private $brewprocedure;

    /**
     * @var string
     *
     * @ORM\Column(name="brewSpecialProcedure", type="text", nullable=true)
     */
    private $brewspecialprocedure;

    /**
     * @var string
     *
     * @ORM\Column(name="brewPrimary", type="string", length=10, nullable=true)
     */
    private $brewprimary;

    /**
     * @var string
     *
     * @ORM\Column(name="brewPrimaryTemp", type="string", length=10, nullable=true)
     */
    private $brewprimarytemp;

    /**
     * @var string
     *
     * @ORM\Column(name="brewSecondary", type="string", length=10, nullable=true)
     */
    private $brewsecondary;

    /**
     * @var string
     *
     * @ORM\Column(name="brewSecondaryTemp", type="string", length=10, nullable=true)
     */
    private $brewsecondarytemp;

    /**
     * @var string
     *
     * @ORM\Column(name="brewTertiary", type="string", length=10, nullable=true)
     */
    private $brewtertiary;

    /**
     * @var string
     *
     * @ORM\Column(name="brewTertiaryTemp", type="string", length=10, nullable=true)
     */
    private $brewtertiarytemp;

    /**
     * @var string
     *
     * @ORM\Column(name="brewLager", type="string", length=10, nullable=true)
     */
    private $brewlager;

    /**
     * @var string
     *
     * @ORM\Column(name="brewLagerTemp", type="string", length=10, nullable=true)
     */
    private $brewlagertemp;

    /**
     * @var string
     *
     * @ORM\Column(name="brewAge", type="string", length=10, nullable=true)
     */
    private $brewage;

    /**
     * @var string
     *
     * @ORM\Column(name="brewAgeTemp", type="string", length=10, nullable=true)
     */
    private $brewagetemp;

    /**
     * @var float
     *
     * @ORM\Column(name="brewBitterness", type="float", nullable=true)
     */
    private $brewbitterness;

    /**
     * @var string
     *
     * @ORM\Column(name="brewIBUFormula", type="string", length=250, nullable=true)
     */
    private $brewibuformula;

    /**
     * @var float
     *
     * @ORM\Column(name="brewLovibond", type="float", nullable=true)
     */
    private $brewlovibond;

    /**
     * @var string
     *
     * @ORM\Column(name="brewColorFormula", type="string", length=50, nullable=true)
     */
    private $brewcolorformula;

    /**
     * @var string
     *
     * @ORM\Column(name="brewComments", type="text", nullable=true)
     */
    private $brewcomments;

    /**
     * @var string
     *
     * @ORM\Column(name="brewMashType", type="string", length=250, nullable=true)
     */
    private $brewmashtype;

    /**
     * @var string
     *
     * @ORM\Column(name="brewMashGrainWeight", type="string", length=10, nullable=true)
     */
    private $brewmashgrainweight;

    /**
     * @var string
     *
     * @ORM\Column(name="brewMashGrainTemp", type="string", length=2, nullable=true)
     */
    private $brewmashgraintemp;

    /**
     * @var string
     *
     * @ORM\Column(name="brewMashTunTemp", type="string", length=3, nullable=true)
     */
    private $brewmashtuntemp;

    /**
     * @var string
     *
     * @ORM\Column(name="brewMashSpargAmt", type="string", length=20, nullable=true)
     */
    private $brewmashspargamt;

    /**
     * @var string
     *
     * @ORM\Column(name="brewMashSpargeTemp", type="string", length=3, nullable=true)
     */
    private $brewmashspargetemp;

    /**
     * @var string
     *
     * @ORM\Column(name="brewMashEquipAdjust", type="string", length=10, nullable=true)
     */
    private $brewmashequipadjust;

    /**
     * @var string
     *
     * @ORM\Column(name="brewMashPH", type="string", length=5, nullable=true)
     */
    private $brewmashph;

    /**
     * @var string
     *
     * @ORM\Column(name="brewMashStep1Name", type="string", length=250, nullable=true)
     */
    private $brewmashstep1name;

    /**
     * @var string
     *
     * @ORM\Column(name="brewMashStep1Desc", type="string", length=250, nullable=true)
     */
    private $brewmashstep1desc;

    /**
     * @var string
     *
     * @ORM\Column(name="brewMashStep1Temp", type="string", length=10, nullable=true)
     */
    private $brewmashstep1temp;

    /**
     * @var string
     *
     * @ORM\Column(name="brewMashStep1Time", type="string", length=10, nullable=true)
     */
    private $brewmashstep1time;

    /**
     * @var string
     *
     * @ORM\Column(name="brewMashStep2Name", type="string", length=250, nullable=true)
     */
    private $brewmashstep2name;

    /**
     * @var string
     *
     * @ORM\Column(name="brewMashStep2Desc", type="string", length=250, nullable=true)
     */
    private $brewmashstep2desc;

    /**
     * @var string
     *
     * @ORM\Column(name="brewMashStep2Temp", type="string", length=10, nullable=true)
     */
    private $brewmashstep2temp;

    /**
     * @var string
     *
     * @ORM\Column(name="brewMashStep2Time", type="string", length=10, nullable=true)
     */
    private $brewmashstep2time;

    /**
     * @var string
     *
     * @ORM\Column(name="brewMashStep3Name", type="string", length=250, nullable=true)
     */
    private $brewmashstep3name;

    /**
     * @var string
     *
     * @ORM\Column(name="brewMashStep3Desc", type="string", length=250, nullable=true)
     */
    private $brewmashstep3desc;

    /**
     * @var string
     *
     * @ORM\Column(name="brewMashStep3Temp", type="string", length=10, nullable=true)
     */
    private $brewmashstep3temp;

    /**
     * @var string
     *
     * @ORM\Column(name="brewMashStep3Time", type="string", length=10, nullable=true)
     */
    private $brewmashstep3time;

    /**
     * @var string
     *
     * @ORM\Column(name="brewMashStep4Name", type="string", length=250, nullable=true)
     */
    private $brewmashstep4name;

    /**
     * @var string
     *
     * @ORM\Column(name="brewMashStep4Desc", type="string", length=250, nullable=true)
     */
    private $brewmashstep4desc;

    /**
     * @var string
     *
     * @ORM\Column(name="brewMashStep4Temp", type="string", length=10, nullable=true)
     */
    private $brewmashstep4temp;

    /**
     * @var string
     *
     * @ORM\Column(name="brewMashStep4Time", type="string", length=10, nullable=true)
     */
    private $brewmashstep4time;

    /**
     * @var string
     *
     * @ORM\Column(name="brewMashStep5Name", type="string", length=250, nullable=true)
     */
    private $brewmashstep5name;

    /**
     * @var string
     *
     * @ORM\Column(name="brewMashStep5Desc", type="string", length=250, nullable=true)
     */
    private $brewmashstep5desc;

    /**
     * @var string
     *
     * @ORM\Column(name="brewMashStep5Temp", type="string", length=10, nullable=true)
     */
    private $brewmashstep5temp;

    /**
     * @var string
     *
     * @ORM\Column(name="brewMashStep5Time", type="string", length=10, nullable=true)
     */
    private $brewmashstep5time;

    /**
     * @var string
     *
     * @ORM\Column(name="brewWaterName", type="string", length=250, nullable=true)
     */
    private $brewwatername;

    /**
     * @var string
     *
     * @ORM\Column(name="brewWaterAmount", type="string", length=25, nullable=true)
     */
    private $brewwateramount;

    /**
     * @var string
     *
     * @ORM\Column(name="brewWaterCalcium", type="string", length=25, nullable=true)
     */
    private $brewwatercalcium;

    /**
     * @var string
     *
     * @ORM\Column(name="brewWaterBicarb", type="string", length=25, nullable=true)
     */
    private $brewwaterbicarb;

    /**
     * @var string
     *
     * @ORM\Column(name="brewWaterSulfate", type="string", length=25, nullable=true)
     */
    private $brewwatersulfate;

    /**
     * @var string
     *
     * @ORM\Column(name="brewWaterChloride", type="string", length=25, nullable=true)
     */
    private $brewwaterchloride;

    /**
     * @var string
     *
     * @ORM\Column(name="brewWaterMagnesium", type="string", length=25, nullable=true)
     */
    private $brewwatermagnesium;

    /**
     * @var string
     *
     * @ORM\Column(name="brewWaterPH", type="string", length=25, nullable=true)
     */
    private $brewwaterph;

    /**
     * @var string
     *
     * @ORM\Column(name="brewWaterNotes", type="text", nullable=true)
     */
    private $brewwaternotes;

    /**
     * @var string
     *
     * @ORM\Column(name="brewWaterSodium", type="string", length=25, nullable=true)
     */
    private $brewwatersodium;

    /**
     * @var string
     *
     * @ORM\Column(name="brewEfficiency", type="string", length=10, nullable=true)
     */
    private $brewefficiency;

    /**
     * @var string
     *
     * @ORM\Column(name="brewPPG", type="string", length=10, nullable=true)
     */
    private $brewppg;

    /**
     * @var string
     *
     * @ORM\Column(name="brewStatus", type="string", length=250, nullable=true)
     */
    private $brewstatus;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="brewTapDate", type="date", nullable=true)
     */
    private $brewtapdate;

    /**
     * @var string
     *
     * @ORM\Column(name="brewMashGravity", type="string", length=10, nullable=true)
     */
    private $brewmashgravity;

    /**
     * @var string
     *
     * @ORM\Column(name="brewPreBoilAmt", type="string", length=10, nullable=true)
     */
    private $brewpreboilamt;

    /**
     * @var string
     *
     * @ORM\Column(name="brewBrewerID", type="string", length=250, nullable=true)
     */
    private $brewbrewerid;

    /**
     * @var string
     *
     * @ORM\Column(name="brewTargetOG", type="string", length=250, nullable=true)
     */
    private $brewtargetog;

    /**
     * @var string
     *
     * @ORM\Column(name="brewTargetFG", type="string", length=250, nullable=true)
     */
    private $brewtargetfg;

    /**
     * @var integer
     *
     * @ORM\Column(name="brewMashProfile", type="integer", nullable=true)
     */
    private $brewmashprofile;

    /**
     * @var integer
     *
     * @ORM\Column(name="brewWaterProfile", type="integer", nullable=true)
     */
    private $brewwaterprofile;

    /**
     * @var integer
     *
     * @ORM\Column(name="brewYeastProfile", type="integer", nullable=true)
     */
    private $brewyeastprofile;

    /**
     * @var integer
     *
     * @ORM\Column(name="brewEquipProfile", type="integer", nullable=true)
     */
    private $brewequipprofile;

    /**
     * @var integer
     *
     * @ORM\Column(name="brewBoilTime", type="integer", nullable=true)
     */
    private $brewboiltime;

    /**
     * @var string
     *
     * @ORM\Column(name="brewFeatured", type="string", length=1, nullable=true)
     */
    private $brewfeatured;

    /**
     * @var string
     *
     * @ORM\Column(name="brewWaterRatio", type="string", length=8, nullable=true)
     */
    private $brewwaterratio;

    /**
     * @var string
     *
     * @ORM\Column(name="brewArchive", type="string", length=8, nullable=true)
     */
    private $brewarchive;


    /**
     * @var YeastProfiles
     * 
     * @ORM\ManyToOne(targetEntity="YeastProfiles")
     * @ORM\JoinColumn(name="brewYeastProfile", referencedColumnName="id")
     */
    private $yeastProfile;
    
    
    /**
     * @var EquipProfiles
     * 
     * @ORM\ManyToOne(targetEntity="EquipProfiles")
     * @ORM\JoinColumn(name="brewEquipProfile", referencedColumnName="id")
     */
    private $equipmentProfile;
    
    /**
     * @var MashProfiles
     * 
     * @ORM\ManyToOne(targetEntity="MashProfiles")
     * @ORM\JoinColumn(name="brewMashProfile", referencedColumnName="id")
     */
    private $mashProfile;
    
    /**
     * @var WaterProfiles
     * 
     * @ORM\ManyToOne(targetEntity="WaterProfiles")
     * @ORM\JoinColumn(name="brewWaterProfile", referencedColumnName="id")
     */
    private $waterProfile;
    
    /**
     * 
     * @ORM\OneToMany(targetEntity="HopAddition", mappedBy="batch")
     *
     * @var Doctrine\Common\Collections\Collection
     */
    private $hopAdditions;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set brewname
     *
     * @param string $brewname
     * @return Brewing
     */
    public function setName($brewname)
    {
        $this->brewname = $brewname;
    
        return $this;
    }

    /**
     * Get brewname
     *
     * @return string 
     */
    public function getName()
    {
        return $this->brewname;
    }

    /**
     * Set brewstyle
     *
     * @param string $brewstyle
     * @return Brewing
     */
    public function setStyle($brewstyle)
    {
        $this->brewstyle = $brewstyle;
    
        return $this;
    }

    /**
     * Get brewstyle
     *
     * @return string 
     */
    public function getStyle()
    {
        return $this->brewstyle;
    }

    /**
     * Set brewbatchnum
     *
     * @param string $brewbatchnum
     * @return Brewing
     */
    public function setBatchNum($brewbatchnum)
    {
        $this->brewbatchnum = $brewbatchnum;
    
        return $this;
    }

    /**
     * Get brewbatchnum
     *
     * @return string 
     */
    public function getBatchNum()
    {
        return $this->brewbatchnum;
    }

    /**
     * Set brewcondition
     *
     * @param string $brewcondition
     * @return Brewing
     */
    public function setCondition($brewcondition)
    {
        $this->brewcondition = $brewcondition;
    
        return $this;
    }

    /**
     * Get brewcondition
     *
     * @return string 
     */
    public function getCondition()
    {
        return $this->brewcondition;
    }

    /**
     * Set brewdate
     *
     * @param \DateTime $brewdate
     * @return Brewing
     */
    public function setDate($brewdate)
    {
        $this->brewdate = $brewdate;
    
        return $this;
    }

    /**
     * Get brewdate
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->brewdate;
    }

    /**
     * Set brewyield
     *
     * @param string $brewyield
     * @return Brewing
     */
    public function setYield($brewyield)
    {
        $this->brewyield = $brewyield;
    
        return $this;
    }

    /**
     * Get brewyield
     *
     * @return string 
     */
    public function getYield()
    {
        return $this->brewyield;
    }

    /**
     * Set brewmethod
     *
     * @param string $brewmethod
     * @return Brewing
     */
    public function setMethod($brewmethod)
    {
        $this->brewmethod = $brewmethod;
    
        return $this;
    }

    /**
     * Get brewmethod
     *
     * @return string 
     */
    public function getMethod()
    {
        return $this->brewmethod;
    }

    /**
     * Set brewcost
     *
     * @param string $brewcost
     * @return Brewing
     */
    public function setCost($brewcost)
    {
        $this->brewcost = $brewcost;
    
        return $this;
    }

    /**
     * Get brewcost
     *
     * @return string 
     */
    public function getCost()
    {
        return $this->brewcost;
    }

    /**
     * Set brewlink1
     *
     * @param string $brewlink1
     * @return Brewing
     */
    public function setLink1($brewlink1)
    {
        $this->brewlink1 = $brewlink1;
    
        return $this;
    }

    /**
     * Get brewlink1
     *
     * @return string 
     */
    public function getLink1()
    {
        return $this->brewlink1;
    }

    /**
     * Set brewlink1name
     *
     * @param string $brewlink1name
     * @return Brewing
     */
    public function setLink1Name($brewlink1name)
    {
        $this->brewlink1name = $brewlink1name;
    
        return $this;
    }

    /**
     * Get brewlink1name
     *
     * @return string 
     */
    public function getLink1Name()
    {
        return $this->brewlink1name;
    }

    /**
     * Set brewlink2
     *
     * @param string $brewlink2
     * @return Brewing
     */
    public function setLink2($brewlink2)
    {
        $this->brewlink2 = $brewlink2;
    
        return $this;
    }

    /**
     * Get brewlink2
     *
     * @return string 
     */
    public function getLink2()
    {
        return $this->brewlink2;
    }

    /**
     * Set brewlink2name
     *
     * @param string $brewlink2name
     * @return Brewing
     */
    public function setLink2Name($brewlink2name)
    {
        $this->brewlink2name = $brewlink2name;
    
        return $this;
    }

    /**
     * Get brewlink2name
     *
     * @return string 
     */
    public function getLink2Name()
    {
        return $this->brewlink2name;
    }

    /**
     * Set brewinfo
     *
     * @param string $brewinfo
     * @return Brewing
     */
    public function setInfo($brewinfo)
    {
        $this->brewinfo = $brewinfo;
    
        return $this;
    }

    /**
     * Get brewinfo
     *
     * @return string 
     */
    public function getInfo()
    {
        return $this->brewinfo;
    }

    /**
     * Set brewextract1
     *
     * @param string $brewextract1
     * @return Brewing
     */
    public function setExtract1($brewextract1)
    {
        $this->brewextract1 = $brewextract1;
    
        return $this;
    }

    /**
     * Get brewextract1
     *
     * @return string 
     */
    public function getExtract1()
    {
        return $this->brewextract1;
    }

    /**
     * Set brewextract1weight
     *
     * @param string $brewextract1weight
     * @return Brewing
     */
    public function setExtract1weight($brewextract1weight)
    {
        $this->brewextract1weight = $brewextract1weight;
    
        return $this;
    }

    /**
     * Get brewextract1weight
     *
     * @return string 
     */
    public function getExtract1weight()
    {
        return $this->brewextract1weight;
    }

    /**
     * Set brewextract2
     *
     * @param string $brewextract2
     * @return Brewing
     */
    public function setExtract2($brewextract2)
    {
        $this->brewextract2 = $brewextract2;
    
        return $this;
    }

    /**
     * Get brewextract2
     *
     * @return string 
     */
    public function getExtract2()
    {
        return $this->brewextract2;
    }

    /**
     * Set brewextract2weight
     *
     * @param string $brewextract2weight
     * @return Brewing
     */
    public function setExtract2weight($brewextract2weight)
    {
        $this->brewextract2weight = $brewextract2weight;
    
        return $this;
    }

    /**
     * Get brewextract2weight
     *
     * @return string 
     */
    public function getExtract2weight()
    {
        return $this->brewextract2weight;
    }

    /**
     * Set brewextract3
     *
     * @param string $brewextract3
     * @return Brewing
     */
    public function setExtract3($brewextract3)
    {
        $this->brewextract3 = $brewextract3;
    
        return $this;
    }

    /**
     * Get brewextract3
     *
     * @return string 
     */
    public function getExtract3()
    {
        return $this->brewextract3;
    }

    /**
     * Set brewextract3weight
     *
     * @param string $brewextract3weight
     * @return Brewing
     */
    public function setExtract3weight($brewextract3weight)
    {
        $this->brewextract3weight = $brewextract3weight;
    
        return $this;
    }

    /**
     * Get brewextract3weight
     *
     * @return string 
     */
    public function getExtract3weight()
    {
        return $this->brewextract3weight;
    }

    /**
     * Set brewextract4
     *
     * @param string $brewextract4
     * @return Brewing
     */
    public function setExtract4($brewextract4)
    {
        $this->brewextract4 = $brewextract4;
    
        return $this;
    }

    /**
     * Get brewextract4
     *
     * @return string 
     */
    public function getExtract4()
    {
        return $this->brewextract4;
    }

    /**
     * Set brewextract4weight
     *
     * @param string $brewextract4weight
     * @return Brewing
     */
    public function setExtract4weight($brewextract4weight)
    {
        $this->brewextract4weight = $brewextract4weight;
    
        return $this;
    }

    /**
     * Get brewextract4weight
     *
     * @return string 
     */
    public function getExtract4weight()
    {
        return $this->brewextract4weight;
    }

    /**
     * Set brewextract5
     *
     * @param string $brewextract5
     * @return Brewing
     */
    public function setExtract5($brewextract5)
    {
        $this->brewextract5 = $brewextract5;
    
        return $this;
    }

    /**
     * Get brewextract5
     *
     * @return string 
     */
    public function getExtract5()
    {
        return $this->brewextract5;
    }

    /**
     * Set brewextract5weight
     *
     * @param string $brewextract5weight
     * @return Brewing
     */
    public function setExtract5weight($brewextract5weight)
    {
        $this->brewextract5weight = $brewextract5weight;
    
        return $this;
    }

    /**
     * Get brewextract5weight
     *
     * @return string 
     */
    public function getExtract5weight()
    {
        return $this->brewextract5weight;
    }

    /**
     * Set brewgrain1
     *
     * @param string $brewgrain1
     * @return Brewing
     */
    public function setGrain1($brewgrain1)
    {
        $this->brewgrain1 = $brewgrain1;
    
        return $this;
    }

    /**
     * Set brewgrain1weight
     *
     * @param string $brewgrain1weight
     * @return Brewing
     */
    public function setGrain1weight($brewgrain1weight)
    {
        $this->brewgrain1weight = $brewgrain1weight;
    
        return $this;
    }

    /**
     * Set brewgrain2
     *
     * @param string $brewgrain2
     * @return Brewing
     */
    public function setGrain2($brewgrain2)
    {
        $this->brewgrain2 = $brewgrain2;
    
        return $this;
    }

    /**
     * Set brewgrain2weight
     *
     * @param string $brewgrain2weight
     * @return Brewing
     */
    public function setGrain2weight($brewgrain2weight)
    {
        $this->brewgrain2weight = $brewgrain2weight;
    
        return $this;
    }

    /**
     * Set brewgrain3
     *
     * @param string $brewgrain3
     * @return Brewing
     */
    public function setGrain3($brewgrain3)
    {
        $this->brewgrain3 = $brewgrain3;
    
        return $this;
    }

    /**
     * Set brewgrain3weight
     *
     * @param string $brewgrain3weight
     * @return Brewing
     */
    public function setGrain3weight($brewgrain3weight)
    {
        $this->brewgrain3weight = $brewgrain3weight;
    
        return $this;
    }
    
    /**
     * Set brewgrain4
     *
     * @param string $brewgrain4
     * @return Brewing
     */
    public function setGrain4($brewgrain4)
    {
        $this->brewgrain4 = $brewgrain4;
    
        return $this;
    }

    /**
     * Set brewgrain4weight
     *
     * @param string $brewgrain4weight
     * @return Brewing
     */
    public function setGrain4weight($brewgrain4weight)
    {
        $this->brewgrain4weight = $brewgrain4weight;
    
        return $this;
    }

    /**
     * Set brewgrain5
     *
     * @param string $brewgrain5
     * @return Brewing
     */
    public function setGrain5($brewgrain5)
    {
        $this->brewgrain5 = $brewgrain5;
    
        return $this;
    }

    /**
     * Set brewgrain5weight
     *
     * @param string $brewgrain5weight
     * @return Brewing
     */
    public function setGrain5weight($brewgrain5weight)
    {
        $this->brewgrain5weight = $brewgrain5weight;
    
        return $this;
    }

    /**
     * Set brewgrain6
     *
     * @param string $brewgrain6
     * @return Brewing
     */
    public function setGrain6($brewgrain6)
    {
        $this->brewgrain6 = $brewgrain6;
    
        return $this;
    }

    /**
     * Set brewgrain6weight
     *
     * @param string $brewgrain6weight
     * @return Brewing
     */
    public function setGrain6weight($brewgrain6weight)
    {
        $this->brewgrain6weight = $brewgrain6weight;
    
        return $this;
    }

    /**
     * Set brewgrain7
     *
     * @param string $brewgrain7
     * @return Brewing
     */
    public function setGrain7($brewgrain7)
    {
        $this->brewgrain7 = $brewgrain7;
    
        return $this;
    }

    /**
     * Set brewgrain7weight
     *
     * @param string $brewgrain7weight
     * @return Brewing
     */
    public function setGrain7weight($brewgrain7weight)
    {
        $this->brewgrain7weight = $brewgrain7weight;
    
        return $this;
    }

    /**
     * Set brewgrain8
     *
     * @param string $brewgrain8
     * @return Brewing
     */
    public function setGrain8($brewgrain8)
    {
        $this->brewgrain8 = $brewgrain8;
    
        return $this;
    }
    
    /**
     * Set brewgrain8weight
     *
     * @param string $brewgrain8weight
     * @return Brewing
     */
    public function setGrain8weight($brewgrain8weight)
    {
        $this->brewgrain8weight = $brewgrain8weight;
    
        return $this;
    }

    /**
     * Set brewgrain9
     *
     * @param string $brewgrain9
     * @return Brewing
     */
    public function setGrain9($brewgrain9)
    {
        $this->brewgrain9 = $brewgrain9;
    
        return $this;
    }

    /**
     * Set brewgrain9weight
     *
     * @param string $brewgrain9weight
     * @return Brewing
     */
    public function setGrain9weight($brewgrain9weight)
    {
        $this->brewgrain9weight = $brewgrain9weight;
    
        return $this;
    }

    /**
     * Set brewgrain10
     *
     * @param string $brewgrain10
     * @return Brewing
     */
    public function setGrain10($brewgrain10)
    {
        $this->brewgrain10 = $brewgrain10;
    
        return $this;
    }

    /**
     * Set brewgrain10weight
     *
     * @param string $brewgrain10weight
     * @return Brewing
     */
    public function setGrain10weight($brewgrain10weight)
    {
        $this->brewgrain10weight = $brewgrain10weight;
    
        return $this;
    }

    /**
     * Set brewgrain11
     *
     * @param string $brewgrain11
     * @return Brewing
     */
    public function setGrain11($brewgrain11)
    {
        $this->brewgrain11 = $brewgrain11;
    
        return $this;
    }

    /**
     * Set brewgrain11weight
     *
     * @param string $brewgrain11weight
     * @return Brewing
     */
    public function setGrain11weight($brewgrain11weight)
    {
        $this->brewgrain11weight = $brewgrain11weight;
    
        return $this;
    }

    /**
     * Set brewgrain12
     *
     * @param string $brewgrain12
     * @return Brewing
     */
    public function setGrain12($brewgrain12)
    {
        $this->brewgrain12 = $brewgrain12;
    
        return $this;
    }

    /**
     * Set brewgrain12weight
     *
     * @param string $brewgrain12weight
     * @return Brewing
     */
    public function setGrain12weight($brewgrain12weight)
    {
        $this->brewgrain12weight = $brewgrain12weight;
    
        return $this;
    }

    /**
     * Set brewgrain13
     *
     * @param string $brewgrain13
     * @return Brewing
     */
    public function setGrain13($brewgrain13)
    {
        $this->brewgrain13 = $brewgrain13;
    
        return $this;
    }

    /**
     * Set brewgrain13weight
     *
     * @param string $brewgrain13weight
     * @return Brewing
     */
    public function setGrain13weight($brewgrain13weight)
    {
        $this->brewgrain13weight = $brewgrain13weight;
    
        return $this;
    }

    /**
     * Set brewgrain14
     *
     * @param string $brewgrain14
     * @return Brewing
     */
    public function setGrain14($brewgrain14)
    {
        $this->brewgrain14 = $brewgrain14;
    
        return $this;
    }

    /**
     * Set brewgrain14weight
     *
     * @param string $brewgrain14weight
     * @return Brewing
     */
    public function setGrain14weight($brewgrain14weight)
    {
        $this->brewgrain14weight = $brewgrain14weight;
    
        return $this;
    }

    /**
     * Set brewgrain15
     *
     * @param string $brewgrain15
     * @return Brewing
     */
    public function setGrain15($brewgrain15)
    {
        $this->brewgrain15 = $brewgrain15;
    
        return $this;
    }

    /**
     * Set brewgrain15weight
     *
     * @param string $brewgrain15weight
     * @return Brewing
     */
    public function setGrain15weight($brewgrain15weight)
    {
        $this->brewgrain15weight = $brewgrain15weight;
    
        return $this;
    }

    /**
     * Get brewgrain15weight
     *
     * @return string 
     */
    public function getGrain15weight()
    {
        return $this->brewgrain15weight;
    }

    /**
     * Set brewaddition1
     *
     * @param string $brewaddition1
     * @return Brewing
     */
    public function setAddition1($brewaddition1)
    {
        $this->brewaddition1 = $brewaddition1;
    
        return $this;
    }

    /**
     * Get brewaddition1
     *
     * @return string 
     */
    public function getAddition1()
    {
        return $this->brewaddition1;
    }

    /**
     * Set brewaddition1amt
     *
     * @param string $brewaddition1amt
     * @return Brewing
     */
    public function setAddition1amt($brewaddition1amt)
    {
        $this->brewaddition1amt = $brewaddition1amt;
    
        return $this;
    }

    /**
     * Get brewaddition1amt
     *
     * @return string 
     */
    public function getAddition1amt()
    {
        return $this->brewaddition1amt;
    }

    /**
     * Set brewaddition2
     *
     * @param string $brewaddition2
     * @return Brewing
     */
    public function setAddition2($brewaddition2)
    {
        $this->brewaddition2 = $brewaddition2;
    
        return $this;
    }

    /**
     * Get brewaddition2
     *
     * @return string 
     */
    public function getAddition2()
    {
        return $this->brewaddition2;
    }

    /**
     * Set brewaddition2amt
     *
     * @param string $brewaddition2amt
     * @return Brewing
     */
    public function setAddition2amt($brewaddition2amt)
    {
        $this->brewaddition2amt = $brewaddition2amt;
    
        return $this;
    }

    /**
     * Get brewaddition2amt
     *
     * @return string 
     */
    public function getAddition2amt()
    {
        return $this->brewaddition2amt;
    }

    /**
     * Set brewaddition3
     *
     * @param string $brewaddition3
     * @return Brewing
     */
    public function setAddition3($brewaddition3)
    {
        $this->brewaddition3 = $brewaddition3;
    
        return $this;
    }

    /**
     * Get brewaddition3
     *
     * @return string 
     */
    public function getAddition3()
    {
        return $this->brewaddition3;
    }

    /**
     * Set brewaddition3amt
     *
     * @param string $brewaddition3amt
     * @return Brewing
     */
    public function setAddition3amt($brewaddition3amt)
    {
        $this->brewaddition3amt = $brewaddition3amt;
    
        return $this;
    }

    /**
     * Get brewaddition3amt
     *
     * @return string 
     */
    public function getAddition3amt()
    {
        return $this->brewaddition3amt;
    }

    /**
     * Set brewaddition4
     *
     * @param string $brewaddition4
     * @return Brewing
     */
    public function setAddition4($brewaddition4)
    {
        $this->brewaddition4 = $brewaddition4;
    
        return $this;
    }

    /**
     * Get brewaddition4
     *
     * @return string 
     */
    public function getAddition4()
    {
        return $this->brewaddition4;
    }

    /**
     * Set brewaddition4amt
     *
     * @param string $brewaddition4amt
     * @return Brewing
     */
    public function setAddition4amt($brewaddition4amt)
    {
        $this->brewaddition4amt = $brewaddition4amt;
    
        return $this;
    }

    /**
     * Get brewaddition4amt
     *
     * @return string 
     */
    public function getAddition4amt()
    {
        return $this->brewaddition4amt;
    }

    /**
     * Set brewaddition5
     *
     * @param string $brewaddition5
     * @return Brewing
     */
    public function setAddition5($brewaddition5)
    {
        $this->brewaddition5 = $brewaddition5;
    
        return $this;
    }

    /**
     * Get brewaddition5
     *
     * @return string 
     */
    public function getAddition5()
    {
        return $this->brewaddition5;
    }

    /**
     * Set brewaddition5amt
     *
     * @param string $brewaddition5amt
     * @return Brewing
     */
    public function setAddition5amt($brewaddition5amt)
    {
        $this->brewaddition5amt = $brewaddition5amt;
    
        return $this;
    }

    /**
     * Get brewaddition5amt
     *
     * @return string 
     */
    public function getAddition5amt()
    {
        return $this->brewaddition5amt;
    }

    /**
     * Set brewaddition6
     *
     * @param string $brewaddition6
     * @return Brewing
     */
    public function setAddition6($brewaddition6)
    {
        $this->brewaddition6 = $brewaddition6;
    
        return $this;
    }

    /**
     * Get brewaddition6
     *
     * @return string 
     */
    public function getAddition6()
    {
        return $this->brewaddition6;
    }

    /**
     * Set brewaddition6amt
     *
     * @param string $brewaddition6amt
     * @return Brewing
     */
    public function setAddition6amt($brewaddition6amt)
    {
        $this->brewaddition6amt = $brewaddition6amt;
    
        return $this;
    }

    /**
     * Get brewaddition6amt
     *
     * @return string 
     */
    public function getAddition6amt()
    {
        return $this->brewaddition6amt;
    }

    /**
     * Set brewaddition7
     *
     * @param string $brewaddition7
     * @return Brewing
     */
    public function setAddition7($brewaddition7)
    {
        $this->brewaddition7 = $brewaddition7;
    
        return $this;
    }

    /**
     * Get brewaddition7
     *
     * @return string 
     */
    public function getAddition7()
    {
        return $this->brewaddition7;
    }

    /**
     * Set brewaddition7amt
     *
     * @param string $brewaddition7amt
     * @return Brewing
     */
    public function setAddition7amt($brewaddition7amt)
    {
        $this->brewaddition7amt = $brewaddition7amt;
    
        return $this;
    }

    /**
     * Get brewaddition7amt
     *
     * @return string 
     */
    public function getAddition7amt()
    {
        return $this->brewaddition7amt;
    }

    /**
     * Set brewaddition8
     *
     * @param string $brewaddition8
     * @return Brewing
     */
    public function setAddition8($brewaddition8)
    {
        $this->brewaddition8 = $brewaddition8;
    
        return $this;
    }

    /**
     * Get brewaddition8
     *
     * @return string 
     */
    public function getAddition8()
    {
        return $this->brewaddition8;
    }

    /**
     * Set brewaddition8amt
     *
     * @param string $brewaddition8amt
     * @return Brewing
     */
    public function setAddition8amt($brewaddition8amt)
    {
        $this->brewaddition8amt = $brewaddition8amt;
    
        return $this;
    }

    /**
     * Get brewaddition8amt
     *
     * @return string 
     */
    public function getAddition8amt()
    {
        return $this->brewaddition8amt;
    }

    /**
     * Set brewaddition9
     *
     * @param string $brewaddition9
     * @return Brewing
     */
    public function setAddition9($brewaddition9)
    {
        $this->brewaddition9 = $brewaddition9;
    
        return $this;
    }

    /**
     * Get brewaddition9
     *
     * @return string 
     */
    public function getAddition9()
    {
        return $this->brewaddition9;
    }

    /**
     * Set brewaddition9amt
     *
     * @param string $brewaddition9amt
     * @return Brewing
     */
    public function setAddition9amt($brewaddition9amt)
    {
        $this->brewaddition9amt = $brewaddition9amt;
    
        return $this;
    }

    /**
     * Get brewaddition9amt
     *
     * @return string 
     */
    public function getAddition9amt()
    {
        return $this->brewaddition9amt;
    }

    /**
     * Set brewmisc1name
     *
     * @param string $brewmisc1name
     * @return Brewing
     */
    public function setMisc1name($brewmisc1name)
    {
        $this->brewmisc1name = $brewmisc1name;
    
        return $this;
    }

    /**
     * Set brewmisc2name
     *
     * @param string $brewmisc2name
     * @return Brewing
     */
    public function setMisc2name($brewmisc2name)
    {
        $this->brewmisc2name = $brewmisc2name;
    
        return $this;
    }

    /**
     * Set brewmisc3name
     *
     * @param string $brewmisc3name
     * @return Brewing
     */
    public function setMisc3name($brewmisc3name)
    {
        $this->brewmisc3name = $brewmisc3name;
    
        return $this;
    }

    /**
     * Set brewmisc4name
     *
     * @param string $brewmisc4name
     * @return Brewing
     */
    public function setMisc4name($brewmisc4name)
    {
        $this->brewmisc4name = $brewmisc4name;
    
        return $this;
    }

    /**
     * Set brewmisc1type
     *
     * @param string $brewmisc1type
     * @return Brewing
     */
    public function setMisc1type($brewmisc1type)
    {
        $this->brewmisc1type = $brewmisc1type;
    
        return $this;
    }

    /**
     * Set brewmisc2type
     *
     * @param string $brewmisc2type
     * @return Brewing
     */
    public function setMisc2type($brewmisc2type)
    {
        $this->brewmisc2type = $brewmisc2type;
    
        return $this;
    }

    /**
     * Set brewmisc3type
     *
     * @param string $brewmisc3type
     * @return Brewing
     */
    public function setMisc3type($brewmisc3type)
    {
        $this->brewmisc3type = $brewmisc3type;
    
        return $this;
    }

    /**
     * Set brewmisc4type
     *
     * @param string $brewmisc4type
     * @return Brewing
     */
    public function setMisc4type($brewmisc4type)
    {
        $this->brewmisc4type = $brewmisc4type;
    
        return $this;
    }

    /**
     * Set brewmisc1use
     *
     * @param string $brewmisc1use
     * @return Brewing
     */
    public function setMisc1use($brewmisc1use)
    {
        $this->brewmisc1use = $brewmisc1use;
    
        return $this;
    }

    /**
     * Set brewmisc2use
     *
     * @param string $brewmisc2use
     * @return Brewing
     */
    public function setMisc2use($brewmisc2use)
    {
        $this->brewmisc2use = $brewmisc2use;
    
        return $this;
    }

    /**
     * Set brewmisc3use
     *
     * @param string $brewmisc3use
     * @return Brewing
     */
    public function setMisc3use($brewmisc3use)
    {
        $this->brewmisc3use = $brewmisc3use;
    
        return $this;
    }

    /**
     * Set brewmisc4use
     *
     * @param string $brewmisc4use
     * @return Brewing
     */
    public function setMisc4use($brewmisc4use)
    {
        $this->brewmisc4use = $brewmisc4use;
    
        return $this;
    }

    /**
     * Set brewmisc1time
     *
     * @param string $brewmisc1time
     * @return Brewing
     */
    public function setMisc1time($brewmisc1time)
    {
        $this->brewmisc1time = $brewmisc1time;
    
        return $this;
    }

    /**
     * Set brewmisc2time
     *
     * @param string $brewmisc2time
     * @return Brewing
     */
    public function setMisc2time($brewmisc2time)
    {
        $this->brewmisc2time = $brewmisc2time;
    
        return $this;
    }

    /**
     * Set brewmisc3time
     *
     * @param string $brewmisc3time
     * @return Brewing
     */
    public function setMisc3time($brewmisc3time)
    {
        $this->brewmisc3time = $brewmisc3time;
    
        return $this;
    }

    /**
     * Set brewmisc4time
     *
     * @param string $brewmisc4time
     * @return Brewing
     */
    public function setMisc4time($brewmisc4time)
    {
        $this->brewmisc4time = $brewmisc4time;
    
        return $this;
    }

    /**
     * Set brewmisc1amount
     *
     * @param string $brewmisc1amount
     * @return Brewing
     */
    public function setMisc1amount($brewmisc1amount)
    {
        $this->brewmisc1amount = $brewmisc1amount;
    
        return $this;
    }

    /**
     * Set brewmisc2amount
     *
     * @param string $brewmisc2amount
     * @return Brewing
     */
    public function setMisc2amount($brewmisc2amount)
    {
        $this->brewmisc2amount = $brewmisc2amount;
    
        return $this;
    }

    /**
     * Set brewmisc3amount
     *
     * @param string $brewmisc3amount
     * @return Brewing
     */
    public function setMisc3amount($brewmisc3amount)
    {
        $this->brewmisc3amount = $brewmisc3amount;
    
        return $this;
    }

    /**
     * Set brewmisc4amount
     *
     * @param string $brewmisc4amount
     * @return Brewing
     */
    public function setMisc4amount($brewmisc4amount)
    {
        $this->brewmisc4amount = $brewmisc4amount;
    
        return $this;
    }

    /**
     * Set brewyeast
     *
     * @param string $brewyeast
     * @return Brewing
     */
    public function setYeast($brewyeast)
    {
        $this->brewyeast = $brewyeast;
    
        return $this;
    }

    /**
     * Get brewyeast
     *
     * @return string 
     */
    public function getYeast()
    {
        return $this->brewyeast;
    }

    /**
     * Set brewyeastman
     *
     * @param string $brewyeastman
     * @return Brewing
     */
    public function setYeastMan($brewyeastman)
    {
        $this->brewyeastman = $brewyeastman;
    
        return $this;
    }

    /**
     * Get brewyeastman
     *
     * @return string 
     */
    public function getYeastMan()
    {
        return $this->brewyeastman;
    }

    /**
     * Set brewyeastform
     *
     * @param string $brewyeastform
     * @return Brewing
     */
    public function setYeastForm($brewyeastform)
    {
        $this->brewyeastform = $brewyeastform;
    
        return $this;
    }

    /**
     * Get brewyeastform
     *
     * @return string 
     */
    public function getYeastForm()
    {
        return $this->brewyeastform;
    }

    /**
     * Set brewyeasttype
     *
     * @param string $brewyeasttype
     * @return Brewing
     */
    public function setYeastType($brewyeasttype)
    {
        $this->brewyeasttype = $brewyeasttype;
    
        return $this;
    }

    /**
     * Get brewyeasttype
     *
     * @return string 
     */
    public function getYeastType()
    {
        return $this->brewyeasttype;
    }

    /**
     * Set brewyeastamount
     *
     * @param string $brewyeastamount
     * @return Brewing
     */
    public function setYeastAmount($brewyeastamount)
    {
        $this->brewyeastamount = $brewyeastamount;
    
        return $this;
    }

    /**
     * Get brewyeastamount
     *
     * @return string 
     */
    public function getYeastAmount()
    {
        return $this->brewyeastamount;
    }

    /**
     * Set brewlabelimage
     *
     * @param string $brewlabelimage
     * @return Brewing
     */
    public function setLabelImage($brewlabelimage)
    {
        $this->brewlabelimage = $brewlabelimage;
    
        return $this;
    }

    /**
     * Get brewlabelimage
     *
     * @return string 
     */
    public function getLabelImage()
    {
        return $this->brewlabelimage;
    }

    /**
     * Set brewog
     *
     * @param string $brewog
     * @return Brewing
     */
    public function setOG($brewog)
    {
        $this->brewog = $brewog;
    
        return $this;
    }

    /**
     * Get brewog
     *
     * @return string 
     */
    public function getOG()
    {
        return $this->brewog;
    }

    /**
     * Set brewfg
     *
     * @param string $brewfg
     * @return Brewing
     */
    public function setFG($brewfg)
    {
        $this->brewfg = $brewfg;
    
        return $this;
    }

    /**
     * Get brewfg
     *
     * @return string 
     */
    public function getFG()
    {
        return $this->brewfg;
    }

    /**
     * Set brewgravity1
     *
     * @param string $brewgravity1
     * @return Brewing
     */
    public function setGravity1($brewgravity1)
    {
        $this->brewgravity1 = $brewgravity1;
    
        return $this;
    }

    /**
     * Get brewgravity1
     *
     * @return string 
     */
    public function getGravity1()
    {
        return $this->brewgravity1;
    }

    /**
     * Set brewgravity1days
     *
     * @param string $brewgravity1days
     * @return Brewing
     */
    public function setGravity1Days($brewgravity1days)
    {
        $this->brewgravity1days = $brewgravity1days;
    
        return $this;
    }

    /**
     * Get brewgravity1days
     *
     * @return string 
     */
    public function getGravity1Days()
    {
        return $this->brewgravity1days;
    }

    /**
     * Set brewgravity2
     *
     * @param string $brewgravity2
     * @return Brewing
     */
    public function setGravity2($brewgravity2)
    {
        $this->brewgravity2 = $brewgravity2;
    
        return $this;
    }

    /**
     * Get brewgravity2
     *
     * @return string 
     */
    public function getGravity2()
    {
        return $this->brewgravity2;
    }

    /**
     * Set brewgravity2days
     *
     * @param string $brewgravity2days
     * @return Brewing
     */
    public function setGravity2Days($brewgravity2days)
    {
        $this->brewgravity2days = $brewgravity2days;
    
        return $this;
    }

    /**
     * Get brewgravity2days
     *
     * @return string 
     */
    public function getGravity2Days()
    {
        return $this->brewgravity2days;
    }

    /**
     * Set brewprocedure
     *
     * @param string $brewprocedure
     * @return Brewing
     */
    public function setProcedure($brewprocedure)
    {
        $this->brewprocedure = $brewprocedure;
    
        return $this;
    }

    /**
     * Get brewprocedure
     *
     * @return string 
     */
    public function getProcedure()
    {
        return $this->brewprocedure;
    }

    /**
     * Set brewspecialprocedure
     *
     * @param string $brewspecialprocedure
     * @return Brewing
     */
    public function setSpecialProcedure($brewspecialprocedure)
    {
        $this->brewspecialprocedure = $brewspecialprocedure;
    
        return $this;
    }

    /**
     * Get brewspecialprocedure
     *
     * @return string 
     */
    public function getSpecialProcedure()
    {
        return $this->brewspecialprocedure;
    }

    /**
     * Set brewprimary
     *
     * @param string $brewprimary
     * @return Brewing
     */
    public function setPrimaryDays($brewprimary)
    {
        $this->brewprimary = $brewprimary;
    
        return $this;
    }

    /**
     * Get brewprimary
     *
     * @return string 
     */
    public function getPrimaryDays()
    {
        return $this->brewprimary;
    }

    /**
     * Set brewprimarytemp
     *
     * @param string $brewprimarytemp
     * @return Brewing
     */
    public function setPrimaryTemp($brewprimarytemp)
    {
        $this->brewprimarytemp = $brewprimarytemp;
    
        return $this;
    }

    /**
     * Get brewprimarytemp
     *
     * @return string 
     */
    public function getPrimaryTemp()
    {
        return $this->brewprimarytemp;
    }

    /**
     * Set brewsecondary
     *
     * @param string $brewsecondary
     * @return Brewing
     */
    public function setSecondaryDays($brewsecondary)
    {
        $this->brewsecondary = $brewsecondary;
    
        return $this;
    }

    /**
     * Get brewsecondary
     *
     * @return string 
     */
    public function getSecondaryDays()
    {
        return $this->brewsecondary;
    }

    /**
     * Set brewsecondarytemp
     *
     * @param string $brewsecondarytemp
     * @return Brewing
     */
    public function setSecondaryTemp($brewsecondarytemp)
    {
        $this->brewsecondarytemp = $brewsecondarytemp;
    
        return $this;
    }

    /**
     * Get brewsecondarytemp
     *
     * @return string 
     */
    public function getSecondaryTemp()
    {
        return $this->brewsecondarytemp;
    }

    /**
     * Set brewtertiary
     *
     * @param string $brewtertiary
     * @return Brewing
     */
    public function setTertiaryDays($brewtertiary)
    {
        $this->brewtertiary = $brewtertiary;
    
        return $this;
    }

    /**
     * Get brewtertiary
     *
     * @return string 
     */
    public function getTertiaryDays()
    {
        return $this->brewtertiary;
    }

    /**
     * Set brewtertiarytemp
     *
     * @param string $brewtertiarytemp
     * @return Brewing
     */
    public function setTertiaryTemp($brewtertiarytemp)
    {
        $this->brewtertiarytemp = $brewtertiarytemp;
    
        return $this;
    }

    /**
     * Get brewtertiarytemp
     *
     * @return string 
     */
    public function getTertiaryTemp()
    {
        return $this->brewtertiarytemp;
    }

    /**
     * Set brewlager
     *
     * @param string $brewlager
     * @return Brewing
     */
    public function setLagerDays($brewlager)
    {
        $this->brewlager = $brewlager;
    
        return $this;
    }

    /**
     * Get brewlager
     *
     * @return string 
     */
    public function getLagerDays()
    {
        return $this->brewlager;
    }

    /**
     * Set brewlagertemp
     *
     * @param string $brewlagertemp
     * @return Brewing
     */
    public function setLagerTemp($brewlagertemp)
    {
        $this->brewlagertemp = $brewlagertemp;
    
        return $this;
    }

    /**
     * Get brewlagertemp
     *
     * @return string 
     */
    public function getLagerTemp()
    {
        return $this->brewlagertemp;
    }

    /**
     * Set brewage
     *
     * @param string $brewage
     * @return Brewing
     */
    public function setAgeDays($brewage)
    {
        $this->brewage = $brewage;
    
        return $this;
    }

    /**
     * Get brewage
     *
     * @return string 
     */
    public function getAgeDays()
    {
        return $this->brewage;
    }

    /**
     * Set brewagetemp
     *
     * @param string $brewagetemp
     * @return Brewing
     */
    public function setAgeTemp($brewagetemp)
    {
        $this->brewagetemp = $brewagetemp;
    
        return $this;
    }

    /**
     * Get brewagetemp
     *
     * @return string 
     */
    public function getAgeTemp()
    {
        return $this->brewagetemp;
    }

    /**
     * Set brewbitterness
     *
     * @param float $brewbitterness
     * @return Brewing
     */
    public function setBitterness($brewbitterness)
    {
        $this->brewbitterness = $brewbitterness;
    
        return $this;
    }

    /**
     * Get brewbitterness
     *
     * @return float 
     */
    public function getBitterness()
    {
        return $this->brewbitterness;
    }

    /**
     * Set brewibuformula
     *
     * @param string $brewibuformula
     * @return Brewing
     */
    public function setIBUFormula($brewibuformula)
    {
        $this->brewibuformula = $brewibuformula;
    
        return $this;
    }

    /**
     * Get brewibuformula
     *
     * @return string 
     */
    public function getIBUFormula()
    {
        return $this->brewibuformula;
    }

    /**
     * Set brewlovibond
     *
     * @param float $brewlovibond
     * @return Brewing
     */
    public function setLovibond($brewlovibond)
    {
        $this->brewlovibond = $brewlovibond;
    
        return $this;
    }

    /**
     * Get brewlovibond
     *
     * @return float 
     */
    public function getLovibond()
    {
        return $this->brewlovibond;
    }

    /**
     * Set brewcolorformula
     *
     * @param string $brewcolorformula
     * @return Brewing
     */
    public function setColorFormula($brewcolorformula)
    {
        $this->brewcolorformula = $brewcolorformula;
    
        return $this;
    }

    /**
     * Get brewcolorformula
     *
     * @return string 
     */
    public function getColorFormula()
    {
        return $this->brewcolorformula;
    }

    /**
     * Set brewcomments
     *
     * @param string $brewcomments
     * @return Brewing
     */
    public function setComments($brewcomments)
    {
        $this->brewcomments = $brewcomments;
    
        return $this;
    }

    /**
     * Get brewcomments
     *
     * @return string 
     */
    public function getComments()
    {
        return $this->brewcomments;
    }

    /**
     * Set brewmashtype
     *
     * @param string $brewmashtype
     * @return Brewing
     */
    public function setMashType($brewmashtype)
    {
        $this->brewmashtype = $brewmashtype;
    
        return $this;
    }

    /**
     * Get brewmashtype
     *
     * @return string 
     */
    public function getMashType()
    {
        return $this->brewmashtype;
    }

    /**
     * Set brewmashgrainweight
     *
     * @param string $brewmashgrainweight
     * @return Brewing
     */
    public function setMashGrainWeight($brewmashgrainweight)
    {
        $this->brewmashgrainweight = $brewmashgrainweight;
    
        return $this;
    }

    /**
     * Get brewmashgrainweight
     *
     * @return string 
     */
    public function getMashGrainWeight()
    {
        return $this->brewmashgrainweight;
    }

    /**
     * Set brewmashgraintemp
     *
     * @param string $brewmashgraintemp
     * @return Brewing
     */
    public function setMashGrainTemp($brewmashgraintemp)
    {
        $this->brewmashgraintemp = $brewmashgraintemp;
    
        return $this;
    }

    /**
     * Get brewmashgraintemp
     *
     * @return string 
     */
    public function getMashGrainTemp()
    {
        return $this->brewmashgraintemp;
    }

    /**
     * Set brewmashtuntemp
     *
     * @param string $brewmashtuntemp
     * @return Brewing
     */
    public function setMashTunTemp($brewmashtuntemp)
    {
        $this->brewmashtuntemp = $brewmashtuntemp;
    
        return $this;
    }

    /**
     * Get brewmashtuntemp
     *
     * @return string 
     */
    public function getMashTunTemp()
    {
        return $this->brewmashtuntemp;
    }

    /**
     * Set brewmashspargamt
     *
     * @param string $brewmashspargamt
     * @return Brewing
     */
    public function setMashSpargeAmt($brewmashspargamt)
    {
        $this->brewmashspargamt = $brewmashspargamt;
    
        return $this;
    }

    /**
     * Get brewmashspargamt
     *
     * @return string 
     */
    public function getMashSpargeAmt()
    {
        return $this->brewmashspargamt;
    }

    /**
     * Set brewmashspargetemp
     *
     * @param string $brewmashspargetemp
     * @return Brewing
     */
    public function setMashSpargeTemp($brewmashspargetemp)
    {
        $this->brewmashspargetemp = $brewmashspargetemp;
    
        return $this;
    }

    /**
     * Get brewmashspargetemp
     *
     * @return string 
     */
    public function getMashSpargeTemp()
    {
        return $this->brewmashspargetemp;
    }

    /**
     * Set brewmashequipadjust
     *
     * @param string $brewmashequipadjust
     * @return Brewing
     */
    public function setMashEquipAdjust($brewmashequipadjust)
    {
        $this->brewmashequipadjust = $brewmashequipadjust;
    
        return $this;
    }

    /**
     * Get brewmashequipadjust
     *
     * @return string 
     */
    public function getMashEquipAdjust()
    {
        return $this->brewmashequipadjust;
    }

    /**
     * Set brewmashph
     *
     * @param string $brewmashph
     * @return Brewing
     */
    public function setMashPH($brewmashph)
    {
        $this->brewmashph = $brewmashph;
    
        return $this;
    }

    /**
     * Get brewmashph
     *
     * @return string 
     */
    public function getMashPH()
    {
        return $this->brewmashph;
    }

    /**
     * Set brewmashstep1name
     *
     * @param string $brewmashstep1name
     * @return Brewing
     */
    public function setMashStep1name($brewmashstep1name)
    {
        $this->brewmashstep1name = $brewmashstep1name;
    
        return $this;
    }

    /**
     * Get brewmashstep1name
     *
     * @return string 
     */
    public function getMashStep1name()
    {
        return $this->brewmashstep1name;
    }

    /**
     * Set brewmashstep1desc
     *
     * @param string $brewmashstep1desc
     * @return Brewing
     */
    public function setMashStep1desc($brewmashstep1desc)
    {
        $this->brewmashstep1desc = $brewmashstep1desc;
    
        return $this;
    }

    /**
     * Get brewmashstep1desc
     *
     * @return string 
     */
    public function getMashStep1desc()
    {
        return $this->brewmashstep1desc;
    }

    /**
     * Set brewmashstep1temp
     *
     * @param string $brewmashstep1temp
     * @return Brewing
     */
    public function setMashStep1temp($brewmashstep1temp)
    {
        $this->brewmashstep1temp = $brewmashstep1temp;
    
        return $this;
    }

    /**
     * Get brewmashstep1temp
     *
     * @return string 
     */
    public function getMashStep1temp()
    {
        return $this->brewmashstep1temp;
    }

    /**
     * Set brewmashstep1time
     *
     * @param string $brewmashstep1time
     * @return Brewing
     */
    public function setMashStep1time($brewmashstep1time)
    {
        $this->brewmashstep1time = $brewmashstep1time;
    
        return $this;
    }

    /**
     * Get brewmashstep1time
     *
     * @return string 
     */
    public function getMashStep1time()
    {
        return $this->brewmashstep1time;
    }

    /**
     * Set brewmashstep2name
     *
     * @param string $brewmashstep2name
     * @return Brewing
     */
    public function setMashStep2name($brewmashstep2name)
    {
        $this->brewmashstep2name = $brewmashstep2name;
    
        return $this;
    }

    /**
     * Get brewmashstep2name
     *
     * @return string 
     */
    public function getMashStep2name()
    {
        return $this->brewmashstep2name;
    }

    /**
     * Set brewmashstep2desc
     *
     * @param string $brewmashstep2desc
     * @return Brewing
     */
    public function setMashStep2desc($brewmashstep2desc)
    {
        $this->brewmashstep2desc = $brewmashstep2desc;
    
        return $this;
    }

    /**
     * Get brewmashstep2desc
     *
     * @return string 
     */
    public function getMashStep2desc()
    {
        return $this->brewmashstep2desc;
    }

    /**
     * Set brewmashstep2temp
     *
     * @param string $brewmashstep2temp
     * @return Brewing
     */
    public function setMashStep2temp($brewmashstep2temp)
    {
        $this->brewmashstep2temp = $brewmashstep2temp;
    
        return $this;
    }

    /**
     * Get brewmashstep2temp
     *
     * @return string 
     */
    public function getMashStep2temp()
    {
        return $this->brewmashstep2temp;
    }

    /**
     * Set brewmashstep2time
     *
     * @param string $brewmashstep2time
     * @return Brewing
     */
    public function setMashStep2time($brewmashstep2time)
    {
        $this->brewmashstep2time = $brewmashstep2time;
    
        return $this;
    }

    /**
     * Get brewmashstep2time
     *
     * @return string 
     */
    public function getMashStep2time()
    {
        return $this->brewmashstep2time;
    }

    /**
     * Set brewmashstep3name
     *
     * @param string $brewmashstep3name
     * @return Brewing
     */
    public function setMashStep3name($brewmashstep3name)
    {
        $this->brewmashstep3name = $brewmashstep3name;
    
        return $this;
    }

    /**
     * Get brewmashstep3name
     *
     * @return string 
     */
    public function getMashStep3name()
    {
        return $this->brewmashstep3name;
    }

    /**
     * Set brewmashstep3desc
     *
     * @param string $brewmashstep3desc
     * @return Brewing
     */
    public function setMashStep3desc($brewmashstep3desc)
    {
        $this->brewmashstep3desc = $brewmashstep3desc;
    
        return $this;
    }

    /**
     * Get brewmashstep3desc
     *
     * @return string 
     */
    public function getMashStep3desc()
    {
        return $this->brewmashstep3desc;
    }

    /**
     * Set brewmashstep3temp
     *
     * @param string $brewmashstep3temp
     * @return Brewing
     */
    public function setMashStep3temp($brewmashstep3temp)
    {
        $this->brewmashstep3temp = $brewmashstep3temp;
    
        return $this;
    }

    /**
     * Get brewmashstep3temp
     *
     * @return string 
     */
    public function getMashStep3temp()
    {
        return $this->brewmashstep3temp;
    }

    /**
     * Set brewmashstep3time
     *
     * @param string $brewmashstep3time
     * @return Brewing
     */
    public function setMashStep3time($brewmashstep3time)
    {
        $this->brewmashstep3time = $brewmashstep3time;
    
        return $this;
    }

    /**
     * Get brewmashstep3time
     *
     * @return string 
     */
    public function getMashStep3time()
    {
        return $this->brewmashstep3time;
    }

    /**
     * Set brewmashstep4name
     *
     * @param string $brewmashstep4name
     * @return Brewing
     */
    public function setMashStep4name($brewmashstep4name)
    {
        $this->brewmashstep4name = $brewmashstep4name;
    
        return $this;
    }

    /**
     * Get brewmashstep4name
     *
     * @return string 
     */
    public function getMashStep4name()
    {
        return $this->brewmashstep4name;
    }

    /**
     * Set brewmashstep4desc
     *
     * @param string $brewmashstep4desc
     * @return Brewing
     */
    public function setMashStep4desc($brewmashstep4desc)
    {
        $this->brewmashstep4desc = $brewmashstep4desc;
    
        return $this;
    }

    /**
     * Get brewmashstep4desc
     *
     * @return string 
     */
    public function getMashStep4desc()
    {
        return $this->brewmashstep4desc;
    }

    /**
     * Set brewmashstep4temp
     *
     * @param string $brewmashstep4temp
     * @return Brewing
     */
    public function setMashStep4temp($brewmashstep4temp)
    {
        $this->brewmashstep4temp = $brewmashstep4temp;
    
        return $this;
    }

    /**
     * Get brewmashstep4temp
     *
     * @return string 
     */
    public function getMashStep4temp()
    {
        return $this->brewmashstep4temp;
    }

    /**
     * Set brewmashstep4time
     *
     * @param string $brewmashstep4time
     * @return Brewing
     */
    public function setMashStep4time($brewmashstep4time)
    {
        $this->brewmashstep4time = $brewmashstep4time;
    
        return $this;
    }

    /**
     * Get brewmashstep4time
     *
     * @return string 
     */
    public function getMashStep4time()
    {
        return $this->brewmashstep4time;
    }

    /**
     * Set brewmashstep5name
     *
     * @param string $brewmashstep5name
     * @return Brewing
     */
    public function setMashStep5name($brewmashstep5name)
    {
        $this->brewmashstep5name = $brewmashstep5name;
    
        return $this;
    }

    /**
     * Get brewmashstep5name
     *
     * @return string 
     */
    public function getMashStep5name()
    {
        return $this->brewmashstep5name;
    }

    /**
     * Set brewmashstep5desc
     *
     * @param string $brewmashstep5desc
     * @return Brewing
     */
    public function setMashStep5desc($brewmashstep5desc)
    {
        $this->brewmashstep5desc = $brewmashstep5desc;
    
        return $this;
    }

    /**
     * Get brewmashstep5desc
     *
     * @return string 
     */
    public function getMashStep5desc()
    {
        return $this->brewmashstep5desc;
    }

    /**
     * Set brewmashstep5temp
     *
     * @param string $brewmashstep5temp
     * @return Brewing
     */
    public function setMashStep5temp($brewmashstep5temp)
    {
        $this->brewmashstep5temp = $brewmashstep5temp;
    
        return $this;
    }

    /**
     * Get brewmashstep5temp
     *
     * @return string 
     */
    public function getMashStep5temp()
    {
        return $this->brewmashstep5temp;
    }

    /**
     * Set brewmashstep5time
     *
     * @param string $brewmashstep5time
     * @return Brewing
     */
    public function setMashStep5time($brewmashstep5time)
    {
        $this->brewmashstep5time = $brewmashstep5time;
    
        return $this;
    }

    /**
     * Get brewmashstep5time
     *
     * @return string 
     */
    public function getMashStep5time()
    {
        return $this->brewmashstep5time;
    }

    /**
     * Set brewwatername
     *
     * @param string $brewwatername
     * @return Brewing
     */
    public function setWaterName($brewwatername)
    {
        $this->brewwatername = $brewwatername;
    
        return $this;
    }

    /**
     * Get brewwatername
     *
     * @return string 
     */
    public function getWaterName()
    {
        return $this->brewwatername;
    }

    /**
     * Set brewwateramount
     *
     * @param string $brewwateramount
     * @return Brewing
     */
    public function setWaterAmount($brewwateramount)
    {
        $this->brewwateramount = $brewwateramount;
    
        return $this;
    }

    /**
     * Get brewwateramount
     *
     * @return string 
     */
    public function getWaterAmount()
    {
        return $this->brewwateramount;
    }

    /**
     * Set brewwatercalcium
     *
     * @param string $brewwatercalcium
     * @return Brewing
     */
    public function setWaterCalcium($brewwatercalcium)
    {
        $this->brewwatercalcium = $brewwatercalcium;
    
        return $this;
    }

    /**
     * Get brewwatercalcium
     *
     * @return string 
     */
    public function getWaterCalcium()
    {
        return $this->brewwatercalcium;
    }

    /**
     * Set brewwaterbicarb
     *
     * @param string $brewwaterbicarb
     * @return Brewing
     */
    public function setWaterBiCarb($brewwaterbicarb)
    {
        $this->brewwaterbicarb = $brewwaterbicarb;
    
        return $this;
    }

    /**
     * Get brewwaterbicarb
     *
     * @return string 
     */
    public function getWaterBiCarb()
    {
        return $this->brewwaterbicarb;
    }

    /**
     * Set brewwatersulfate
     *
     * @param string $brewwatersulfate
     * @return Brewing
     */
    public function setWaterSulfate($brewwatersulfate)
    {
        $this->brewwatersulfate = $brewwatersulfate;
    
        return $this;
    }

    /**
     * Get brewwatersulfate
     *
     * @return string 
     */
    public function getWaterSulfate()
    {
        return $this->brewwatersulfate;
    }

    /**
     * Set brewwaterchloride
     *
     * @param string $brewwaterchloride
     * @return Brewing
     */
    public function setWaterChloride($brewwaterchloride)
    {
        $this->brewwaterchloride = $brewwaterchloride;
    
        return $this;
    }

    /**
     * Get brewwaterchloride
     *
     * @return string 
     */
    public function getWaterChloride()
    {
        return $this->brewwaterchloride;
    }

    /**
     * Set brewwatermagnesium
     *
     * @param string $brewwatermagnesium
     * @return Brewing
     */
    public function setWaterMagnesium($brewwatermagnesium)
    {
        $this->brewwatermagnesium = $brewwatermagnesium;
    
        return $this;
    }

    /**
     * Get brewwatermagnesium
     *
     * @return string 
     */
    public function getWaterMagnesium()
    {
        return $this->brewwatermagnesium;
    }

    /**
     * Set brewwaterph
     *
     * @param string $brewwaterph
     * @return Brewing
     */
    public function setWaterPH($brewwaterph)
    {
        $this->brewwaterph = $brewwaterph;
    
        return $this;
    }

    /**
     * Get brewwaterph
     *
     * @return string 
     */
    public function getWaterPH()
    {
        return $this->brewwaterph;
    }

    /**
     * Set brewwaternotes
     *
     * @param string $brewwaternotes
     * @return Brewing
     */
    public function setWaterNotes($brewwaternotes)
    {
        $this->brewwaternotes = $brewwaternotes;
    
        return $this;
    }

    /**
     * Get brewwaternotes
     *
     * @return string 
     */
    public function getWaterNotes()
    {
        return $this->brewwaternotes;
    }

    /**
     * Set brewwatersodium
     *
     * @param string $brewwatersodium
     * @return Brewing
     */
    public function setWaterSodium($brewwatersodium)
    {
        $this->brewwatersodium = $brewwatersodium;
    
        return $this;
    }

    /**
     * Get brewwatersodium
     *
     * @return string 
     */
    public function getWaterSodium()
    {
        return $this->brewwatersodium;
    }

    /**
     * Set brewefficiency
     *
     * @param string $brewefficiency
     * @return Brewing
     */
    public function setEfficiency($brewefficiency)
    {
        $this->brewefficiency = $brewefficiency;
    
        return $this;
    }

    /**
     * Get brewefficiency
     *
     * @return string 
     */
    public function getEfficiency()
    {
        return $this->brewefficiency;
    }

    /**
     * Set brewppg
     *
     * @param string $brewppg
     * @return Brewing
     */
    public function setPPG($brewppg)
    {
        $this->brewppg = $brewppg;
    
        return $this;
    }

    /**
     * Get brewppg
     *
     * @return string 
     */
    public function getPPG()
    {
        return $this->brewppg;
    }

    /**
     * Set brewstatus
     *
     * @param string $brewstatus
     * @return Brewing
     */
    public function setStatus($brewstatus)
    {
        $this->brewstatus = $brewstatus;
    
        return $this;
    }

    /**
     * Get brewstatus
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->brewstatus;
    }

    /**
     * Set brewtapdate
     *
     * @param \DateTime $brewtapdate
     * @return Brewing
     */
    public function setTapDate($brewtapdate)
    {
        $this->brewtapdate = $brewtapdate;
    
        return $this;
    }

    /**
     * Get brewtapdate
     *
     * @return \DateTime 
     */
    public function getTapDate()
    {
        return $this->brewtapdate;
    }

    /**
     * Set brewmashgravity
     *
     * @param string $brewmashgravity
     * @return Brewing
     */
    public function setMashGravity($brewmashgravity)
    {
        $this->brewmashgravity = $brewmashgravity;
    
        return $this;
    }

    /**
     * Get brewmashgravity
     *
     * @return string 
     */
    public function getMashGravity()
    {
        return $this->brewmashgravity;
    }

    /**
     * Set brewpreboilamt
     *
     * @param string $brewpreboilamt
     * @return Brewing
     */
    public function setPreBoilAmt($brewpreboilamt)
    {
        $this->brewpreboilamt = $brewpreboilamt;
    
        return $this;
    }

    /**
     * Get brewpreboilamt
     *
     * @return string 
     */
    public function getPreBoilAmt()
    {
        return $this->brewpreboilamt;
    }

    /**
     * Set brewbrewerid
     *
     * @param string $brewbrewerid
     * @return Brewing
     */
    public function setBrewerId($brewbrewerid)
    {
        $this->brewbrewerid = $brewbrewerid;
    
        return $this;
    }

    /**
     * Get brewbrewerid
     *
     * @return string 
     */
    public function getBrewerId()
    {
        return $this->brewbrewerid;
    }

    /**
     * Set brewtargetog
     *
     * @param string $brewtargetog
     * @return Brewing
     */
    public function setTargetOG($brewtargetog)
    {
        $this->brewtargetog = $brewtargetog;
    
        return $this;
    }

    /**
     * Get brewtargetog
     *
     * @return string 
     */
    public function getTargetOG()
    {
        return $this->brewtargetog;
    }

    /**
     * Set brewtargetfg
     *
     * @param string $brewtargetfg
     * @return Brewing
     */
    public function setTargetFG($brewtargetfg)
    {
        $this->brewtargetfg = $brewtargetfg;
    
        return $this;
    }

    /**
     * Get brewtargetfg
     *
     * @return string 
     */
    public function getTargetFG()
    {
        return $this->brewtargetfg;
    }

    /**
     * Set brewboiltime
     *
     * @param integer $brewboiltime
     * @return Brewing
     */
    public function setBoilTime($brewboiltime)
    {
        $this->brewboiltime = $brewboiltime;
    
        return $this;
    }

    /**
     * Get brewboiltime
     *
     * @return integer 
     */
    public function getBoilTime()
    {
        return $this->brewboiltime;
    }

    /**
     * Set brewfeatured
     *
     * @param string $brewfeatured
     * @return Brewing
     */
    public function setFeatured($brewfeatured)
    {
        $this->brewfeatured = $brewfeatured;
    
        return $this;
    }

    /**
     * Get brewfeatured
     *
     * @return string 
     */
    public function getFeatured()
    {
        return $this->brewfeatured;
    }

    /**
     * Set brewwaterratio
     *
     * @param string $brewwaterratio
     * @return Brewing
     */
    public function setWaterRatio($brewwaterratio)
    {
        $this->brewwaterratio = $brewwaterratio;
    
        return $this;
    }

    /**
     * Get brewwaterratio
     *
     * @return string 
     */
    public function getWaterRatio()
    {
        return $this->brewwaterratio;
    }

    /**
     * Set brewarchive
     *
     * @param string $brewarchive
     * @return Brewing
     */
    public function setArchive($brewarchive)
    {
        $this->brewarchive = $brewarchive;
    
        return $this;
    }

    /**
     * Get brewarchive
     *
     * @return string 
     */
    public function getArchive()
    {
        return $this->brewarchive;
    }
    
    /**
     * The BU/GU ratio for the recipe
     * 
     * This is typically used to figure out apparent bitterness
     * 
     * @return float
     */
    public function getBUGU()
    {
        if ($this->brewog == 1) {
            return null;
        }
        return round($this->brewbitterness/(($this->brewog - 1) * 1000), 2);
    }
    
    /**
     * Calculates calories for this recipe
     * 
     * @return int
     */
    public function getCalories()
    {
        $abw = $this->getABW();
        $extract = $this->getRealExtract();
        return round((6.9 * $abw + 4.0 * ($extract - 0.1)) * $this->brewfg * 3.55, 0);
    }
    
    /**
     * Calculates the alcohol by weight for this recipe
     * 
     * @return float
     */
    public function getABW()
    {
        return round((((($this->brewog - $this->brewfg) / .75) * 100) * .78), 1);
    }
    
    /**
     * Calculates the alcohol by volume for this recipe
     * 
     * @return float
     */
    public function getABV()
    {
        return round((($this->brewog - $this->brewfg) / .75) * 100, 1);
    }
    
    /**
     * I have no idea what real extract is, or what it does.
     * 
     * @todo Figure out what it means
     * @return float
     */
    public function getRealExtract()
    {
         return round((0.1808 * $this->convertGravityToPlato($this->brewog)) + 
                      (0.8192 * $this->convertGravityToPlato($this->brewfg)), 1);
    }
    
    /**
     * Converts specific gravity to degrees Plato
     * 
     * @todo put this somewhere better
     * @param float $gravity
     * @return float
     */
    public function convertGravityToPlato($gravity)
    {
        return round((-463.37) + 
                     (668.72 * $gravity) - 
                     (205.35 * pow($gravity, 2)), 1);
    }
    
    /**
     * Calculates the apparent attenuation of the batch
     * 
     * @return float
     */
    public function getApparentAttenuation()
    {
        return round((1 - ($this->convertGravityToPlato($this->brewfg) / $this->convertGravityToPlato($this->brewog))) * 100, 1);
    }
    
    /**
     * Calculates the real attenuation of the batch
     * 
     * @return float
     */
    public function getRealAttenuation()
    {
        return round((1 - ($this->getRealExtract() / $this->convertGravityToPlato($this->brewog))) * 100,1);
    }
    
    /**
     * Returns an array of Grains
     * 
     * @todo Refactor database to normalize and make this a JOIN
     * @return array
     */
    public function getGrains()
    {
        $grains = array();
        $total = $this->getTotalGrainWeight();
        for ($i=1; $i<=15; $i++)
        {
            $property = "brewgrain$i";
            if (!is_null($this->{$property}) && !is_null($this->{$property . 'weight'})) {
                $grains[] = array('Name'       => $this->{$property}, 
                                  'Weight'     => $this->{$property . 'weight'},
                                  'Percentage' => round(($this->{$property . 'weight'} / $total), 3));
            }
        }
        return $grains;
    }
    
    /**
     * Returns the total weight of the grains
     * 
     * @todo Refactor database to normalize and make this a JOIN
     * @return float
     */
    public function getTotalGrainWeight()
    {
        $weight = 0.0;
        for ($i=1; $i<=15; $i++)
        {
            if (!is_null($this->{'brewgrain' . $i . 'weight'})) {
                $weight += $this->{'brewgrain' . $i . 'weight'};
            }
        }
        return $weight;
    }
    
    /**
     * Collects the fermentable adjuncts for the boil
     * 
     * @return array
     */
    public function getAdjuncts()
    {
        $adjuncts = array();
        for ($i=1; $i<=9; $i++)
        {
            $property = "brewaddition$i";
            if (!is_null($this->{$property})) {
                $adjuncts[] = array('Name'   => $this->{$property}, 
                                    'Amount' => $this->{$property . 'amt'},);
            }
        }
        return $adjuncts;
    }
    
    /**
     * Collects the non-fermentable adjuncts for the boil
     * 
     * @return array
     */
    public function getMiscIngredients()
    {
        $misc = array();
        for ($i=1; $i<=4; $i++)
        {
            $property = "brewmisc$i";
            if (!is_null($this->{$property . 'name'})) {
                $misc[] = array('Name'   => $this->{$property . 'name'}, 
                                'Amount' => $this->{$property . 'amount'},
                                'Time'   => $this->{$property . 'time'},);
            }
        }
        return $misc;
    }
    
    /**
     * Collects the non-fermentable adjuncts for the boil
     * 
     * @return Doctrine\Common\Collections\Collection
     */
    public function getHops()
    {
        if (!isset($this->hopAdditions)) {
            $this->hopAdditions = new ArrayCollection();
        }
        return $this->hopAdditions;
    }
    
    /**
     * For displaying the total
     * 
     * @return array
     */
    public function getTotalHops()
    {
        $total = array("Weight" => 0, 
                       "AAU"    => 0);
        $hops = $this->getHops();

        foreach ($hops as $hop) {
            $total['Weight'] += $hop->getWeight();
            $total['AAU']    += $hop->getAAU();
        }
        return $total;        
    }
    
    /**
     * 
     * @return YeastProfiles
     */
    public function getYeastProfile()
    {
        return $this->yeastProfile;
    }

    /**
     * 
     * @return EquipProfiles
     */
    public function getEquipmentProfile()
    {
        return $this->equipmentProfile;
    }

    /**
     * 
     * @return MashProfiles
     */
    public function getMashProfile()
    {
        return $this->mashProfile;
    }
    
    /**
     * 
     * @return WaterProfiles
     */
    public function getWaterProfile()
    {
        return $this->waterProfile;
    }
}
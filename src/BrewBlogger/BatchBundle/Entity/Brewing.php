<?php

namespace BrewBlogger\BatchBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

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
     * @ORM\Column(name="brewHops1", type="string", length=100, nullable=true)
     */
    private $brewhops1;

    /**
     * @var string
     *
     * @ORM\Column(name="brewHops1Weight", type="string", length=10, nullable=true)
     */
    private $brewhops1weight;

    /**
     * @var string
     *
     * @ORM\Column(name="brewHops1IBU", type="string", length=10, nullable=true)
     */
    private $brewhops1ibu;

    /**
     * @var string
     *
     * @ORM\Column(name="brewHops1Time", type="string", length=25, nullable=true)
     */
    private $brewhops1time;

    /**
     * @var string
     *
     * @ORM\Column(name="brewHops2", type="string", length=100, nullable=true)
     */
    private $brewhops2;

    /**
     * @var string
     *
     * @ORM\Column(name="brewHops2Weight", type="string", length=10, nullable=true)
     */
    private $brewhops2weight;

    /**
     * @var string
     *
     * @ORM\Column(name="brewHops2IBU", type="string", length=10, nullable=true)
     */
    private $brewhops2ibu;

    /**
     * @var string
     *
     * @ORM\Column(name="brewHops2Time", type="string", length=25, nullable=true)
     */
    private $brewhops2time;

    /**
     * @var string
     *
     * @ORM\Column(name="brewHops3", type="string", length=100, nullable=true)
     */
    private $brewhops3;

    /**
     * @var string
     *
     * @ORM\Column(name="brewHops3Weight", type="string", length=10, nullable=true)
     */
    private $brewhops3weight;

    /**
     * @var string
     *
     * @ORM\Column(name="brewHops3IBU", type="string", length=10, nullable=true)
     */
    private $brewhops3ibu;

    /**
     * @var string
     *
     * @ORM\Column(name="brewHops3Time", type="string", length=25, nullable=true)
     */
    private $brewhops3time;

    /**
     * @var string
     *
     * @ORM\Column(name="brewHops4", type="string", length=100, nullable=true)
     */
    private $brewhops4;

    /**
     * @var string
     *
     * @ORM\Column(name="brewHops4Weight", type="string", length=10, nullable=true)
     */
    private $brewhops4weight;

    /**
     * @var string
     *
     * @ORM\Column(name="brewHops4IBU", type="string", length=10, nullable=true)
     */
    private $brewhops4ibu;

    /**
     * @var string
     *
     * @ORM\Column(name="brewHops4Time", type="string", length=25, nullable=true)
     */
    private $brewhops4time;

    /**
     * @var string
     *
     * @ORM\Column(name="brewHops5", type="string", length=100, nullable=true)
     */
    private $brewhops5;

    /**
     * @var string
     *
     * @ORM\Column(name="brewHops5Weight", type="string", length=10, nullable=true)
     */
    private $brewhops5weight;

    /**
     * @var string
     *
     * @ORM\Column(name="brewHops5IBU", type="string", length=10, nullable=true)
     */
    private $brewhops5ibu;

    /**
     * @var string
     *
     * @ORM\Column(name="brewHops5Time", type="string", length=25, nullable=true)
     */
    private $brewhops5time;

    /**
     * @var string
     *
     * @ORM\Column(name="brewHops6", type="string", length=100, nullable=true)
     */
    private $brewhops6;

    /**
     * @var string
     *
     * @ORM\Column(name="brewHops6Weight", type="string", length=10, nullable=true)
     */
    private $brewhops6weight;

    /**
     * @var string
     *
     * @ORM\Column(name="brewHops6IBU", type="string", length=10, nullable=true)
     */
    private $brewhops6ibu;

    /**
     * @var string
     *
     * @ORM\Column(name="brewHops6Time", type="string", length=25, nullable=true)
     */
    private $brewhops6time;

    /**
     * @var string
     *
     * @ORM\Column(name="brewHops7", type="string", length=100, nullable=true)
     */
    private $brewhops7;

    /**
     * @var string
     *
     * @ORM\Column(name="brewHops7Weight", type="string", length=10, nullable=true)
     */
    private $brewhops7weight;

    /**
     * @var string
     *
     * @ORM\Column(name="brewHops7IBU", type="string", length=10, nullable=true)
     */
    private $brewhops7ibu;

    /**
     * @var string
     *
     * @ORM\Column(name="brewHops7Time", type="string", length=25, nullable=true)
     */
    private $brewhops7time;

    /**
     * @var string
     *
     * @ORM\Column(name="brewHops8", type="string", length=100, nullable=true)
     */
    private $brewhops8;

    /**
     * @var string
     *
     * @ORM\Column(name="brewHops8Weight", type="string", length=10, nullable=true)
     */
    private $brewhops8weight;

    /**
     * @var string
     *
     * @ORM\Column(name="brewHops8IBU", type="string", length=10, nullable=true)
     */
    private $brewhops8ibu;

    /**
     * @var string
     *
     * @ORM\Column(name="brewHops8Time", type="string", length=25, nullable=true)
     */
    private $brewhops8time;

    /**
     * @var string
     *
     * @ORM\Column(name="brewHops9", type="string", length=100, nullable=true)
     */
    private $brewhops9;

    /**
     * @var string
     *
     * @ORM\Column(name="brewHops9Weight", type="string", length=10, nullable=true)
     */
    private $brewhops9weight;

    /**
     * @var string
     *
     * @ORM\Column(name="brewHops9IBU", type="string", length=10, nullable=true)
     */
    private $brewhops9ibu;

    /**
     * @var string
     *
     * @ORM\Column(name="brewHops9Time", type="string", length=25, nullable=true)
     */
    private $brewhops9time;

    /**
     * @var string
     *
     * @ORM\Column(name="brewHops1Use", type="string", length=25, nullable=true)
     */
    private $brewhops1use;

    /**
     * @var string
     *
     * @ORM\Column(name="brewHops2Use", type="string", length=25, nullable=true)
     */
    private $brewhops2use;

    /**
     * @var string
     *
     * @ORM\Column(name="brewHops3Use", type="string", length=25, nullable=true)
     */
    private $brewhops3use;

    /**
     * @var string
     *
     * @ORM\Column(name="brewHops4Use", type="string", length=25, nullable=true)
     */
    private $brewhops4use;

    /**
     * @var string
     *
     * @ORM\Column(name="brewHops5Use", type="string", length=25, nullable=true)
     */
    private $brewhops5use;

    /**
     * @var string
     *
     * @ORM\Column(name="brewHops6Use", type="string", length=25, nullable=true)
     */
    private $brewhops6use;

    /**
     * @var string
     *
     * @ORM\Column(name="brewHops7Use", type="string", length=25, nullable=true)
     */
    private $brewhops7use;

    /**
     * @var string
     *
     * @ORM\Column(name="brewHops8Use", type="string", length=25, nullable=true)
     */
    private $brewhops8use;

    /**
     * @var string
     *
     * @ORM\Column(name="brewHops9Use", type="string", length=25, nullable=true)
     */
    private $brewhops9use;

    /**
     * @var string
     *
     * @ORM\Column(name="brewHops1Type", type="string", length=25, nullable=true)
     */
    private $brewhops1type;

    /**
     * @var string
     *
     * @ORM\Column(name="brewHops2Type", type="string", length=25, nullable=true)
     */
    private $brewhops2type;

    /**
     * @var string
     *
     * @ORM\Column(name="brewHops3Type", type="string", length=25, nullable=true)
     */
    private $brewhops3type;

    /**
     * @var string
     *
     * @ORM\Column(name="brewHops4Type", type="string", length=25, nullable=true)
     */
    private $brewhops4type;

    /**
     * @var string
     *
     * @ORM\Column(name="brewHops5Type", type="string", length=25, nullable=true)
     */
    private $brewhops5type;

    /**
     * @var string
     *
     * @ORM\Column(name="brewHops6Type", type="string", length=25, nullable=true)
     */
    private $brewhops6type;

    /**
     * @var string
     *
     * @ORM\Column(name="brewHops7Type", type="string", length=25, nullable=true)
     */
    private $brewhops7type;

    /**
     * @var string
     *
     * @ORM\Column(name="brewHops8Type", type="string", length=25, nullable=true)
     */
    private $brewhops8type;

    /**
     * @var string
     *
     * @ORM\Column(name="brewHops9Type", type="string", length=25, nullable=true)
     */
    private $brewhops9type;

    /**
     * @var string
     *
     * @ORM\Column(name="brewHops1Form", type="string", length=25, nullable=true)
     */
    private $brewhops1form;

    /**
     * @var string
     *
     * @ORM\Column(name="brewHops2Form", type="string", length=25, nullable=true)
     */
    private $brewhops2form;

    /**
     * @var string
     *
     * @ORM\Column(name="brewHops3Form", type="string", length=25, nullable=true)
     */
    private $brewhops3form;

    /**
     * @var string
     *
     * @ORM\Column(name="brewHops4Form", type="string", length=25, nullable=true)
     */
    private $brewhops4form;

    /**
     * @var string
     *
     * @ORM\Column(name="brewHops5Form", type="string", length=25, nullable=true)
     */
    private $brewhops5form;

    /**
     * @var string
     *
     * @ORM\Column(name="brewHops6Form", type="string", length=25, nullable=true)
     */
    private $brewhops6form;

    /**
     * @var string
     *
     * @ORM\Column(name="brewHops7Form", type="string", length=25, nullable=true)
     */
    private $brewhops7form;

    /**
     * @var string
     *
     * @ORM\Column(name="brewHops8Form", type="string", length=25, nullable=true)
     */
    private $brewhops8form;

    /**
     * @var string
     *
     * @ORM\Column(name="brewHops9Form", type="string", length=25, nullable=true)
     */
    private $brewhops9form;

    /**
     * @var string
     *
     * @ORM\Column(name="brewHops10", type="string", length=100, nullable=true)
     */
    private $brewhops10;

    /**
     * @var string
     *
     * @ORM\Column(name="brewHops10Weight", type="string", length=10, nullable=true)
     */
    private $brewhops10weight;

    /**
     * @var string
     *
     * @ORM\Column(name="brewHops10IBU", type="string", length=10, nullable=true)
     */
    private $brewhops10ibu;

    /**
     * @var string
     *
     * @ORM\Column(name="brewHops10Time", type="string", length=25, nullable=true)
     */
    private $brewhops10time;

    /**
     * @var string
     *
     * @ORM\Column(name="brewHops10Use", type="string", length=25, nullable=true)
     */
    private $brewhops10use;

    /**
     * @var string
     *
     * @ORM\Column(name="brewHops10Type", type="string", length=25, nullable=true)
     */
    private $brewhops10type;

    /**
     * @var string
     *
     * @ORM\Column(name="brewHops10Form", type="string", length=25, nullable=true)
     */
    private $brewhops10form;

    /**
     * @var string
     *
     * @ORM\Column(name="brewHops11", type="string", length=100, nullable=true)
     */
    private $brewhops11;

    /**
     * @var string
     *
     * @ORM\Column(name="brewHops11Weight", type="string", length=10, nullable=true)
     */
    private $brewhops11weight;

    /**
     * @var string
     *
     * @ORM\Column(name="brewHops11IBU", type="string", length=10, nullable=true)
     */
    private $brewhops11ibu;

    /**
     * @var string
     *
     * @ORM\Column(name="brewHops11Time", type="string", length=25, nullable=true)
     */
    private $brewhops11time;

    /**
     * @var string
     *
     * @ORM\Column(name="brewHops11Use", type="string", length=25, nullable=true)
     */
    private $brewhops11use;

    /**
     * @var string
     *
     * @ORM\Column(name="brewHops11Type", type="string", length=25, nullable=true)
     */
    private $brewhops11type;

    /**
     * @var string
     *
     * @ORM\Column(name="brewHops11Form", type="string", length=25, nullable=true)
     */
    private $brewhops11form;

    /**
     * @var string
     *
     * @ORM\Column(name="brewHops12", type="string", length=100, nullable=true)
     */
    private $brewhops12;

    /**
     * @var string
     *
     * @ORM\Column(name="brewHops12Weight", type="string", length=10, nullable=true)
     */
    private $brewhops12weight;

    /**
     * @var string
     *
     * @ORM\Column(name="brewHops12IBU", type="string", length=10, nullable=true)
     */
    private $brewhops12ibu;

    /**
     * @var string
     *
     * @ORM\Column(name="brewHops12Time", type="string", length=25, nullable=true)
     */
    private $brewhops12time;

    /**
     * @var string
     *
     * @ORM\Column(name="brewHops12Use", type="string", length=25, nullable=true)
     */
    private $brewhops12use;

    /**
     * @var string
     *
     * @ORM\Column(name="brewHops12Type", type="string", length=25, nullable=true)
     */
    private $brewhops12type;

    /**
     * @var string
     *
     * @ORM\Column(name="brewHops12Form", type="string", length=25, nullable=true)
     */
    private $brewhops12form;

    /**
     * @var string
     *
     * @ORM\Column(name="brewHops13", type="string", length=100, nullable=true)
     */
    private $brewhops13;

    /**
     * @var string
     *
     * @ORM\Column(name="brewHops13Weight", type="string", length=10, nullable=true)
     */
    private $brewhops13weight;

    /**
     * @var string
     *
     * @ORM\Column(name="brewHops13IBU", type="string", length=10, nullable=true)
     */
    private $brewhops13ibu;

    /**
     * @var string
     *
     * @ORM\Column(name="brewHops13Time", type="string", length=25, nullable=true)
     */
    private $brewhops13time;

    /**
     * @var string
     *
     * @ORM\Column(name="brewHops13Use", type="string", length=25, nullable=true)
     */
    private $brewhops13use;

    /**
     * @var string
     *
     * @ORM\Column(name="brewHops13Type", type="string", length=25, nullable=true)
     */
    private $brewhops13type;

    /**
     * @var string
     *
     * @ORM\Column(name="brewHops13Form", type="string", length=25, nullable=true)
     */
    private $brewhops13form;

    /**
     * @var string
     *
     * @ORM\Column(name="brewHops14", type="string", length=100, nullable=true)
     */
    private $brewhops14;

    /**
     * @var string
     *
     * @ORM\Column(name="brewHops14Weight", type="string", length=10, nullable=true)
     */
    private $brewhops14weight;

    /**
     * @var string
     *
     * @ORM\Column(name="brewHops14IBU", type="string", length=10, nullable=true)
     */
    private $brewhops14ibu;

    /**
     * @var string
     *
     * @ORM\Column(name="brewHops14Time", type="string", length=25, nullable=true)
     */
    private $brewhops14time;

    /**
     * @var string
     *
     * @ORM\Column(name="brewHops14Use", type="string", length=25, nullable=true)
     */
    private $brewhops14use;

    /**
     * @var string
     *
     * @ORM\Column(name="brewHops14Type", type="string", length=25, nullable=true)
     */
    private $brewhops14type;

    /**
     * @var string
     *
     * @ORM\Column(name="brewHops14Form", type="string", length=25, nullable=true)
     */
    private $brewhops14form;

    /**
     * @var string
     *
     * @ORM\Column(name="brewHops15", type="string", length=100, nullable=true)
     */
    private $brewhops15;

    /**
     * @var string
     *
     * @ORM\Column(name="brewHops15Weight", type="string", length=10, nullable=true)
     */
    private $brewhops15weight;

    /**
     * @var string
     *
     * @ORM\Column(name="brewHops15IBU", type="string", length=10, nullable=true)
     */
    private $brewhops15ibu;

    /**
     * @var string
     *
     * @ORM\Column(name="brewHops15Time", type="string", length=25, nullable=true)
     */
    private $brewhops15time;

    /**
     * @var string
     *
     * @ORM\Column(name="brewHops15Use", type="string", length=25, nullable=true)
     */
    private $brewhops15use;

    /**
     * @var string
     *
     * @ORM\Column(name="brewHops15Type", type="string", length=25, nullable=true)
     */
    private $brewhops15type;

    /**
     * @var string
     *
     * @ORM\Column(name="brewHops15Form", type="string", length=25, nullable=true)
     */
    private $brewhops15form;

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
    public function setBrewname($brewname)
    {
        $this->brewname = $brewname;
    
        return $this;
    }

    /**
     * Get brewname
     *
     * @return string 
     */
    public function getBrewname()
    {
        return $this->brewname;
    }

    /**
     * Set brewstyle
     *
     * @param string $brewstyle
     * @return Brewing
     */
    public function setBrewstyle($brewstyle)
    {
        $this->brewstyle = $brewstyle;
    
        return $this;
    }

    /**
     * Get brewstyle
     *
     * @return string 
     */
    public function getBrewstyle()
    {
        return $this->brewstyle;
    }

    /**
     * Set brewbatchnum
     *
     * @param string $brewbatchnum
     * @return Brewing
     */
    public function setBrewbatchnum($brewbatchnum)
    {
        $this->brewbatchnum = $brewbatchnum;
    
        return $this;
    }

    /**
     * Get brewbatchnum
     *
     * @return string 
     */
    public function getBrewbatchnum()
    {
        return $this->brewbatchnum;
    }

    /**
     * Set brewcondition
     *
     * @param string $brewcondition
     * @return Brewing
     */
    public function setBrewcondition($brewcondition)
    {
        $this->brewcondition = $brewcondition;
    
        return $this;
    }

    /**
     * Get brewcondition
     *
     * @return string 
     */
    public function getBrewcondition()
    {
        return $this->brewcondition;
    }

    /**
     * Set brewdate
     *
     * @param \DateTime $brewdate
     * @return Brewing
     */
    public function setBrewdate($brewdate)
    {
        $this->brewdate = $brewdate;
    
        return $this;
    }

    /**
     * Get brewdate
     *
     * @return \DateTime 
     */
    public function getBrewdate()
    {
        return $this->brewdate;
    }

    /**
     * Set brewyield
     *
     * @param string $brewyield
     * @return Brewing
     */
    public function setBrewyield($brewyield)
    {
        $this->brewyield = $brewyield;
    
        return $this;
    }

    /**
     * Get brewyield
     *
     * @return string 
     */
    public function getBrewyield()
    {
        return $this->brewyield;
    }

    /**
     * Set brewmethod
     *
     * @param string $brewmethod
     * @return Brewing
     */
    public function setBrewmethod($brewmethod)
    {
        $this->brewmethod = $brewmethod;
    
        return $this;
    }

    /**
     * Get brewmethod
     *
     * @return string 
     */
    public function getBrewmethod()
    {
        return $this->brewmethod;
    }

    /**
     * Set brewcost
     *
     * @param string $brewcost
     * @return Brewing
     */
    public function setBrewcost($brewcost)
    {
        $this->brewcost = $brewcost;
    
        return $this;
    }

    /**
     * Get brewcost
     *
     * @return string 
     */
    public function getBrewcost()
    {
        return $this->brewcost;
    }

    /**
     * Set brewlink1
     *
     * @param string $brewlink1
     * @return Brewing
     */
    public function setBrewlink1($brewlink1)
    {
        $this->brewlink1 = $brewlink1;
    
        return $this;
    }

    /**
     * Get brewlink1
     *
     * @return string 
     */
    public function getBrewlink1()
    {
        return $this->brewlink1;
    }

    /**
     * Set brewlink1name
     *
     * @param string $brewlink1name
     * @return Brewing
     */
    public function setBrewlink1name($brewlink1name)
    {
        $this->brewlink1name = $brewlink1name;
    
        return $this;
    }

    /**
     * Get brewlink1name
     *
     * @return string 
     */
    public function getBrewlink1name()
    {
        return $this->brewlink1name;
    }

    /**
     * Set brewlink2
     *
     * @param string $brewlink2
     * @return Brewing
     */
    public function setBrewlink2($brewlink2)
    {
        $this->brewlink2 = $brewlink2;
    
        return $this;
    }

    /**
     * Get brewlink2
     *
     * @return string 
     */
    public function getBrewlink2()
    {
        return $this->brewlink2;
    }

    /**
     * Set brewlink2name
     *
     * @param string $brewlink2name
     * @return Brewing
     */
    public function setBrewlink2name($brewlink2name)
    {
        $this->brewlink2name = $brewlink2name;
    
        return $this;
    }

    /**
     * Get brewlink2name
     *
     * @return string 
     */
    public function getBrewlink2name()
    {
        return $this->brewlink2name;
    }

    /**
     * Set brewinfo
     *
     * @param string $brewinfo
     * @return Brewing
     */
    public function setBrewinfo($brewinfo)
    {
        $this->brewinfo = $brewinfo;
    
        return $this;
    }

    /**
     * Get brewinfo
     *
     * @return string 
     */
    public function getBrewinfo()
    {
        return $this->brewinfo;
    }

    /**
     * Set brewextract1
     *
     * @param string $brewextract1
     * @return Brewing
     */
    public function setBrewextract1($brewextract1)
    {
        $this->brewextract1 = $brewextract1;
    
        return $this;
    }

    /**
     * Get brewextract1
     *
     * @return string 
     */
    public function getBrewextract1()
    {
        return $this->brewextract1;
    }

    /**
     * Set brewextract1weight
     *
     * @param string $brewextract1weight
     * @return Brewing
     */
    public function setBrewextract1weight($brewextract1weight)
    {
        $this->brewextract1weight = $brewextract1weight;
    
        return $this;
    }

    /**
     * Get brewextract1weight
     *
     * @return string 
     */
    public function getBrewextract1weight()
    {
        return $this->brewextract1weight;
    }

    /**
     * Set brewextract2
     *
     * @param string $brewextract2
     * @return Brewing
     */
    public function setBrewextract2($brewextract2)
    {
        $this->brewextract2 = $brewextract2;
    
        return $this;
    }

    /**
     * Get brewextract2
     *
     * @return string 
     */
    public function getBrewextract2()
    {
        return $this->brewextract2;
    }

    /**
     * Set brewextract2weight
     *
     * @param string $brewextract2weight
     * @return Brewing
     */
    public function setBrewextract2weight($brewextract2weight)
    {
        $this->brewextract2weight = $brewextract2weight;
    
        return $this;
    }

    /**
     * Get brewextract2weight
     *
     * @return string 
     */
    public function getBrewextract2weight()
    {
        return $this->brewextract2weight;
    }

    /**
     * Set brewextract3
     *
     * @param string $brewextract3
     * @return Brewing
     */
    public function setBrewextract3($brewextract3)
    {
        $this->brewextract3 = $brewextract3;
    
        return $this;
    }

    /**
     * Get brewextract3
     *
     * @return string 
     */
    public function getBrewextract3()
    {
        return $this->brewextract3;
    }

    /**
     * Set brewextract3weight
     *
     * @param string $brewextract3weight
     * @return Brewing
     */
    public function setBrewextract3weight($brewextract3weight)
    {
        $this->brewextract3weight = $brewextract3weight;
    
        return $this;
    }

    /**
     * Get brewextract3weight
     *
     * @return string 
     */
    public function getBrewextract3weight()
    {
        return $this->brewextract3weight;
    }

    /**
     * Set brewextract4
     *
     * @param string $brewextract4
     * @return Brewing
     */
    public function setBrewextract4($brewextract4)
    {
        $this->brewextract4 = $brewextract4;
    
        return $this;
    }

    /**
     * Get brewextract4
     *
     * @return string 
     */
    public function getBrewextract4()
    {
        return $this->brewextract4;
    }

    /**
     * Set brewextract4weight
     *
     * @param string $brewextract4weight
     * @return Brewing
     */
    public function setBrewextract4weight($brewextract4weight)
    {
        $this->brewextract4weight = $brewextract4weight;
    
        return $this;
    }

    /**
     * Get brewextract4weight
     *
     * @return string 
     */
    public function getBrewextract4weight()
    {
        return $this->brewextract4weight;
    }

    /**
     * Set brewextract5
     *
     * @param string $brewextract5
     * @return Brewing
     */
    public function setBrewextract5($brewextract5)
    {
        $this->brewextract5 = $brewextract5;
    
        return $this;
    }

    /**
     * Get brewextract5
     *
     * @return string 
     */
    public function getBrewextract5()
    {
        return $this->brewextract5;
    }

    /**
     * Set brewextract5weight
     *
     * @param string $brewextract5weight
     * @return Brewing
     */
    public function setBrewextract5weight($brewextract5weight)
    {
        $this->brewextract5weight = $brewextract5weight;
    
        return $this;
    }

    /**
     * Get brewextract5weight
     *
     * @return string 
     */
    public function getBrewextract5weight()
    {
        return $this->brewextract5weight;
    }

    /**
     * Set brewgrain1
     *
     * @param string $brewgrain1
     * @return Brewing
     */
    public function setBrewgrain1($brewgrain1)
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
    public function setBrewgrain1weight($brewgrain1weight)
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
    public function setBrewgrain2($brewgrain2)
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
    public function setBrewgrain2weight($brewgrain2weight)
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
    public function setBrewgrain3($brewgrain3)
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
    public function setBrewgrain3weight($brewgrain3weight)
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
    public function setBrewgrain4($brewgrain4)
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
    public function setBrewgrain4weight($brewgrain4weight)
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
    public function setBrewgrain5($brewgrain5)
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
    public function setBrewgrain5weight($brewgrain5weight)
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
    public function setBrewgrain6($brewgrain6)
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
    public function setBrewgrain6weight($brewgrain6weight)
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
    public function setBrewgrain7($brewgrain7)
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
    public function setBrewgrain7weight($brewgrain7weight)
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
    public function setBrewgrain8($brewgrain8)
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
    public function setBrewgrain8weight($brewgrain8weight)
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
    public function setBrewgrain9($brewgrain9)
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
    public function setBrewgrain9weight($brewgrain9weight)
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
    public function setBrewgrain10($brewgrain10)
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
    public function setBrewgrain10weight($brewgrain10weight)
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
    public function setBrewgrain11($brewgrain11)
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
    public function setBrewgrain11weight($brewgrain11weight)
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
    public function setBrewgrain12($brewgrain12)
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
    public function setBrewgrain12weight($brewgrain12weight)
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
    public function setBrewgrain13($brewgrain13)
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
    public function setBrewgrain13weight($brewgrain13weight)
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
    public function setBrewgrain14($brewgrain14)
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
    public function setBrewgrain14weight($brewgrain14weight)
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
    public function setBrewgrain15($brewgrain15)
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
    public function setBrewgrain15weight($brewgrain15weight)
    {
        $this->brewgrain15weight = $brewgrain15weight;
    
        return $this;
    }

    /**
     * Get brewgrain15weight
     *
     * @return string 
     */
    public function getBrewgrain15weight()
    {
        return $this->brewgrain15weight;
    }

    /**
     * Set brewaddition1
     *
     * @param string $brewaddition1
     * @return Brewing
     */
    public function setBrewaddition1($brewaddition1)
    {
        $this->brewaddition1 = $brewaddition1;
    
        return $this;
    }

    /**
     * Get brewaddition1
     *
     * @return string 
     */
    public function getBrewaddition1()
    {
        return $this->brewaddition1;
    }

    /**
     * Set brewaddition1amt
     *
     * @param string $brewaddition1amt
     * @return Brewing
     */
    public function setBrewaddition1amt($brewaddition1amt)
    {
        $this->brewaddition1amt = $brewaddition1amt;
    
        return $this;
    }

    /**
     * Get brewaddition1amt
     *
     * @return string 
     */
    public function getBrewaddition1amt()
    {
        return $this->brewaddition1amt;
    }

    /**
     * Set brewaddition2
     *
     * @param string $brewaddition2
     * @return Brewing
     */
    public function setBrewaddition2($brewaddition2)
    {
        $this->brewaddition2 = $brewaddition2;
    
        return $this;
    }

    /**
     * Get brewaddition2
     *
     * @return string 
     */
    public function getBrewaddition2()
    {
        return $this->brewaddition2;
    }

    /**
     * Set brewaddition2amt
     *
     * @param string $brewaddition2amt
     * @return Brewing
     */
    public function setBrewaddition2amt($brewaddition2amt)
    {
        $this->brewaddition2amt = $brewaddition2amt;
    
        return $this;
    }

    /**
     * Get brewaddition2amt
     *
     * @return string 
     */
    public function getBrewaddition2amt()
    {
        return $this->brewaddition2amt;
    }

    /**
     * Set brewaddition3
     *
     * @param string $brewaddition3
     * @return Brewing
     */
    public function setBrewaddition3($brewaddition3)
    {
        $this->brewaddition3 = $brewaddition3;
    
        return $this;
    }

    /**
     * Get brewaddition3
     *
     * @return string 
     */
    public function getBrewaddition3()
    {
        return $this->brewaddition3;
    }

    /**
     * Set brewaddition3amt
     *
     * @param string $brewaddition3amt
     * @return Brewing
     */
    public function setBrewaddition3amt($brewaddition3amt)
    {
        $this->brewaddition3amt = $brewaddition3amt;
    
        return $this;
    }

    /**
     * Get brewaddition3amt
     *
     * @return string 
     */
    public function getBrewaddition3amt()
    {
        return $this->brewaddition3amt;
    }

    /**
     * Set brewaddition4
     *
     * @param string $brewaddition4
     * @return Brewing
     */
    public function setBrewaddition4($brewaddition4)
    {
        $this->brewaddition4 = $brewaddition4;
    
        return $this;
    }

    /**
     * Get brewaddition4
     *
     * @return string 
     */
    public function getBrewaddition4()
    {
        return $this->brewaddition4;
    }

    /**
     * Set brewaddition4amt
     *
     * @param string $brewaddition4amt
     * @return Brewing
     */
    public function setBrewaddition4amt($brewaddition4amt)
    {
        $this->brewaddition4amt = $brewaddition4amt;
    
        return $this;
    }

    /**
     * Get brewaddition4amt
     *
     * @return string 
     */
    public function getBrewaddition4amt()
    {
        return $this->brewaddition4amt;
    }

    /**
     * Set brewaddition5
     *
     * @param string $brewaddition5
     * @return Brewing
     */
    public function setBrewaddition5($brewaddition5)
    {
        $this->brewaddition5 = $brewaddition5;
    
        return $this;
    }

    /**
     * Get brewaddition5
     *
     * @return string 
     */
    public function getBrewaddition5()
    {
        return $this->brewaddition5;
    }

    /**
     * Set brewaddition5amt
     *
     * @param string $brewaddition5amt
     * @return Brewing
     */
    public function setBrewaddition5amt($brewaddition5amt)
    {
        $this->brewaddition5amt = $brewaddition5amt;
    
        return $this;
    }

    /**
     * Get brewaddition5amt
     *
     * @return string 
     */
    public function getBrewaddition5amt()
    {
        return $this->brewaddition5amt;
    }

    /**
     * Set brewaddition6
     *
     * @param string $brewaddition6
     * @return Brewing
     */
    public function setBrewaddition6($brewaddition6)
    {
        $this->brewaddition6 = $brewaddition6;
    
        return $this;
    }

    /**
     * Get brewaddition6
     *
     * @return string 
     */
    public function getBrewaddition6()
    {
        return $this->brewaddition6;
    }

    /**
     * Set brewaddition6amt
     *
     * @param string $brewaddition6amt
     * @return Brewing
     */
    public function setBrewaddition6amt($brewaddition6amt)
    {
        $this->brewaddition6amt = $brewaddition6amt;
    
        return $this;
    }

    /**
     * Get brewaddition6amt
     *
     * @return string 
     */
    public function getBrewaddition6amt()
    {
        return $this->brewaddition6amt;
    }

    /**
     * Set brewaddition7
     *
     * @param string $brewaddition7
     * @return Brewing
     */
    public function setBrewaddition7($brewaddition7)
    {
        $this->brewaddition7 = $brewaddition7;
    
        return $this;
    }

    /**
     * Get brewaddition7
     *
     * @return string 
     */
    public function getBrewaddition7()
    {
        return $this->brewaddition7;
    }

    /**
     * Set brewaddition7amt
     *
     * @param string $brewaddition7amt
     * @return Brewing
     */
    public function setBrewaddition7amt($brewaddition7amt)
    {
        $this->brewaddition7amt = $brewaddition7amt;
    
        return $this;
    }

    /**
     * Get brewaddition7amt
     *
     * @return string 
     */
    public function getBrewaddition7amt()
    {
        return $this->brewaddition7amt;
    }

    /**
     * Set brewaddition8
     *
     * @param string $brewaddition8
     * @return Brewing
     */
    public function setBrewaddition8($brewaddition8)
    {
        $this->brewaddition8 = $brewaddition8;
    
        return $this;
    }

    /**
     * Get brewaddition8
     *
     * @return string 
     */
    public function getBrewaddition8()
    {
        return $this->brewaddition8;
    }

    /**
     * Set brewaddition8amt
     *
     * @param string $brewaddition8amt
     * @return Brewing
     */
    public function setBrewaddition8amt($brewaddition8amt)
    {
        $this->brewaddition8amt = $brewaddition8amt;
    
        return $this;
    }

    /**
     * Get brewaddition8amt
     *
     * @return string 
     */
    public function getBrewaddition8amt()
    {
        return $this->brewaddition8amt;
    }

    /**
     * Set brewaddition9
     *
     * @param string $brewaddition9
     * @return Brewing
     */
    public function setBrewaddition9($brewaddition9)
    {
        $this->brewaddition9 = $brewaddition9;
    
        return $this;
    }

    /**
     * Get brewaddition9
     *
     * @return string 
     */
    public function getBrewaddition9()
    {
        return $this->brewaddition9;
    }

    /**
     * Set brewaddition9amt
     *
     * @param string $brewaddition9amt
     * @return Brewing
     */
    public function setBrewaddition9amt($brewaddition9amt)
    {
        $this->brewaddition9amt = $brewaddition9amt;
    
        return $this;
    }

    /**
     * Get brewaddition9amt
     *
     * @return string 
     */
    public function getBrewaddition9amt()
    {
        return $this->brewaddition9amt;
    }

    /**
     * Set brewmisc1name
     *
     * @param string $brewmisc1name
     * @return Brewing
     */
    public function setBrewmisc1name($brewmisc1name)
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
    public function setBrewmisc2name($brewmisc2name)
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
    public function setBrewmisc3name($brewmisc3name)
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
    public function setBrewmisc4name($brewmisc4name)
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
    public function setBrewmisc1type($brewmisc1type)
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
    public function setBrewmisc2type($brewmisc2type)
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
    public function setBrewmisc3type($brewmisc3type)
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
    public function setBrewmisc4type($brewmisc4type)
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
    public function setBrewmisc1use($brewmisc1use)
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
    public function setBrewmisc2use($brewmisc2use)
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
    public function setBrewmisc3use($brewmisc3use)
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
    public function setBrewmisc4use($brewmisc4use)
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
    public function setBrewmisc1time($brewmisc1time)
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
    public function setBrewmisc2time($brewmisc2time)
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
    public function setBrewmisc3time($brewmisc3time)
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
    public function setBrewmisc4time($brewmisc4time)
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
    public function setBrewmisc1amount($brewmisc1amount)
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
    public function setBrewmisc2amount($brewmisc2amount)
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
    public function setBrewmisc3amount($brewmisc3amount)
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
    public function setBrewmisc4amount($brewmisc4amount)
    {
        $this->brewmisc4amount = $brewmisc4amount;
    
        return $this;
    }

    /**
     * Set brewhops1
     *
     * @param string $brewhops1
     * @return Brewing
     */
    public function setBrewhops1($brewhops1)
    {
        $this->brewhops1 = $brewhops1;
    
        return $this;
    }

    /**
     * Get brewhops1
     *
     * @return string 
     */
    public function getBrewhops1()
    {
        return $this->brewhops1;
    }

    /**
     * Set brewhops1weight
     *
     * @param string $brewhops1weight
     * @return Brewing
     */
    public function setBrewhops1weight($brewhops1weight)
    {
        $this->brewhops1weight = $brewhops1weight;
    
        return $this;
    }

    /**
     * Get brewhops1weight
     *
     * @return string 
     */
    public function getBrewhops1weight()
    {
        return $this->brewhops1weight;
    }

    /**
     * Set brewhops1ibu
     *
     * @param string $brewhops1ibu
     * @return Brewing
     */
    public function setBrewhops1ibu($brewhops1ibu)
    {
        $this->brewhops1ibu = $brewhops1ibu;
    
        return $this;
    }

    /**
     * Get brewhops1ibu
     *
     * @return string 
     */
    public function getBrewhops1ibu()
    {
        return $this->brewhops1ibu;
    }

    /**
     * Set brewhops1time
     *
     * @param string $brewhops1time
     * @return Brewing
     */
    public function setBrewhops1time($brewhops1time)
    {
        $this->brewhops1time = $brewhops1time;
    
        return $this;
    }

    /**
     * Get brewhops1time
     *
     * @return string 
     */
    public function getBrewhops1time()
    {
        return $this->brewhops1time;
    }

    /**
     * Set brewhops2
     *
     * @param string $brewhops2
     * @return Brewing
     */
    public function setBrewhops2($brewhops2)
    {
        $this->brewhops2 = $brewhops2;
    
        return $this;
    }

    /**
     * Get brewhops2
     *
     * @return string 
     */
    public function getBrewhops2()
    {
        return $this->brewhops2;
    }

    /**
     * Set brewhops2weight
     *
     * @param string $brewhops2weight
     * @return Brewing
     */
    public function setBrewhops2weight($brewhops2weight)
    {
        $this->brewhops2weight = $brewhops2weight;
    
        return $this;
    }

    /**
     * Get brewhops2weight
     *
     * @return string 
     */
    public function getBrewhops2weight()
    {
        return $this->brewhops2weight;
    }

    /**
     * Set brewhops2ibu
     *
     * @param string $brewhops2ibu
     * @return Brewing
     */
    public function setBrewhops2ibu($brewhops2ibu)
    {
        $this->brewhops2ibu = $brewhops2ibu;
    
        return $this;
    }

    /**
     * Get brewhops2ibu
     *
     * @return string 
     */
    public function getBrewhops2ibu()
    {
        return $this->brewhops2ibu;
    }

    /**
     * Set brewhops2time
     *
     * @param string $brewhops2time
     * @return Brewing
     */
    public function setBrewhops2time($brewhops2time)
    {
        $this->brewhops2time = $brewhops2time;
    
        return $this;
    }

    /**
     * Get brewhops2time
     *
     * @return string 
     */
    public function getBrewhops2time()
    {
        return $this->brewhops2time;
    }

    /**
     * Set brewhops3
     *
     * @param string $brewhops3
     * @return Brewing
     */
    public function setBrewhops3($brewhops3)
    {
        $this->brewhops3 = $brewhops3;
    
        return $this;
    }

    /**
     * Get brewhops3
     *
     * @return string 
     */
    public function getBrewhops3()
    {
        return $this->brewhops3;
    }

    /**
     * Set brewhops3weight
     *
     * @param string $brewhops3weight
     * @return Brewing
     */
    public function setBrewhops3weight($brewhops3weight)
    {
        $this->brewhops3weight = $brewhops3weight;
    
        return $this;
    }

    /**
     * Get brewhops3weight
     *
     * @return string 
     */
    public function getBrewhops3weight()
    {
        return $this->brewhops3weight;
    }

    /**
     * Set brewhops3ibu
     *
     * @param string $brewhops3ibu
     * @return Brewing
     */
    public function setBrewhops3ibu($brewhops3ibu)
    {
        $this->brewhops3ibu = $brewhops3ibu;
    
        return $this;
    }

    /**
     * Get brewhops3ibu
     *
     * @return string 
     */
    public function getBrewhops3ibu()
    {
        return $this->brewhops3ibu;
    }

    /**
     * Set brewhops3time
     *
     * @param string $brewhops3time
     * @return Brewing
     */
    public function setBrewhops3time($brewhops3time)
    {
        $this->brewhops3time = $brewhops3time;
    
        return $this;
    }

    /**
     * Get brewhops3time
     *
     * @return string 
     */
    public function getBrewhops3time()
    {
        return $this->brewhops3time;
    }

    /**
     * Set brewhops4
     *
     * @param string $brewhops4
     * @return Brewing
     */
    public function setBrewhops4($brewhops4)
    {
        $this->brewhops4 = $brewhops4;
    
        return $this;
    }

    /**
     * Get brewhops4
     *
     * @return string 
     */
    public function getBrewhops4()
    {
        return $this->brewhops4;
    }

    /**
     * Set brewhops4weight
     *
     * @param string $brewhops4weight
     * @return Brewing
     */
    public function setBrewhops4weight($brewhops4weight)
    {
        $this->brewhops4weight = $brewhops4weight;
    
        return $this;
    }

    /**
     * Get brewhops4weight
     *
     * @return string 
     */
    public function getBrewhops4weight()
    {
        return $this->brewhops4weight;
    }

    /**
     * Set brewhops4ibu
     *
     * @param string $brewhops4ibu
     * @return Brewing
     */
    public function setBrewhops4ibu($brewhops4ibu)
    {
        $this->brewhops4ibu = $brewhops4ibu;
    
        return $this;
    }

    /**
     * Get brewhops4ibu
     *
     * @return string 
     */
    public function getBrewhops4ibu()
    {
        return $this->brewhops4ibu;
    }

    /**
     * Set brewhops4time
     *
     * @param string $brewhops4time
     * @return Brewing
     */
    public function setBrewhops4time($brewhops4time)
    {
        $this->brewhops4time = $brewhops4time;
    
        return $this;
    }

    /**
     * Get brewhops4time
     *
     * @return string 
     */
    public function getBrewhops4time()
    {
        return $this->brewhops4time;
    }

    /**
     * Set brewhops5
     *
     * @param string $brewhops5
     * @return Brewing
     */
    public function setBrewhops5($brewhops5)
    {
        $this->brewhops5 = $brewhops5;
    
        return $this;
    }

    /**
     * Get brewhops5
     *
     * @return string 
     */
    public function getBrewhops5()
    {
        return $this->brewhops5;
    }

    /**
     * Set brewhops5weight
     *
     * @param string $brewhops5weight
     * @return Brewing
     */
    public function setBrewhops5weight($brewhops5weight)
    {
        $this->brewhops5weight = $brewhops5weight;
    
        return $this;
    }

    /**
     * Get brewhops5weight
     *
     * @return string 
     */
    public function getBrewhops5weight()
    {
        return $this->brewhops5weight;
    }

    /**
     * Set brewhops5ibu
     *
     * @param string $brewhops5ibu
     * @return Brewing
     */
    public function setBrewhops5ibu($brewhops5ibu)
    {
        $this->brewhops5ibu = $brewhops5ibu;
    
        return $this;
    }

    /**
     * Get brewhops5ibu
     *
     * @return string 
     */
    public function getBrewhops5ibu()
    {
        return $this->brewhops5ibu;
    }

    /**
     * Set brewhops5time
     *
     * @param string $brewhops5time
     * @return Brewing
     */
    public function setBrewhops5time($brewhops5time)
    {
        $this->brewhops5time = $brewhops5time;
    
        return $this;
    }

    /**
     * Get brewhops5time
     *
     * @return string 
     */
    public function getBrewhops5time()
    {
        return $this->brewhops5time;
    }

    /**
     * Set brewhops6
     *
     * @param string $brewhops6
     * @return Brewing
     */
    public function setBrewhops6($brewhops6)
    {
        $this->brewhops6 = $brewhops6;
    
        return $this;
    }

    /**
     * Get brewhops6
     *
     * @return string 
     */
    public function getBrewhops6()
    {
        return $this->brewhops6;
    }

    /**
     * Set brewhops6weight
     *
     * @param string $brewhops6weight
     * @return Brewing
     */
    public function setBrewhops6weight($brewhops6weight)
    {
        $this->brewhops6weight = $brewhops6weight;
    
        return $this;
    }

    /**
     * Get brewhops6weight
     *
     * @return string 
     */
    public function getBrewhops6weight()
    {
        return $this->brewhops6weight;
    }

    /**
     * Set brewhops6ibu
     *
     * @param string $brewhops6ibu
     * @return Brewing
     */
    public function setBrewhops6ibu($brewhops6ibu)
    {
        $this->brewhops6ibu = $brewhops6ibu;
    
        return $this;
    }

    /**
     * Get brewhops6ibu
     *
     * @return string 
     */
    public function getBrewhops6ibu()
    {
        return $this->brewhops6ibu;
    }

    /**
     * Set brewhops6time
     *
     * @param string $brewhops6time
     * @return Brewing
     */
    public function setBrewhops6time($brewhops6time)
    {
        $this->brewhops6time = $brewhops6time;
    
        return $this;
    }

    /**
     * Get brewhops6time
     *
     * @return string 
     */
    public function getBrewhops6time()
    {
        return $this->brewhops6time;
    }

    /**
     * Set brewhops7
     *
     * @param string $brewhops7
     * @return Brewing
     */
    public function setBrewhops7($brewhops7)
    {
        $this->brewhops7 = $brewhops7;
    
        return $this;
    }

    /**
     * Get brewhops7
     *
     * @return string 
     */
    public function getBrewhops7()
    {
        return $this->brewhops7;
    }

    /**
     * Set brewhops7weight
     *
     * @param string $brewhops7weight
     * @return Brewing
     */
    public function setBrewhops7weight($brewhops7weight)
    {
        $this->brewhops7weight = $brewhops7weight;
    
        return $this;
    }

    /**
     * Get brewhops7weight
     *
     * @return string 
     */
    public function getBrewhops7weight()
    {
        return $this->brewhops7weight;
    }

    /**
     * Set brewhops7ibu
     *
     * @param string $brewhops7ibu
     * @return Brewing
     */
    public function setBrewhops7ibu($brewhops7ibu)
    {
        $this->brewhops7ibu = $brewhops7ibu;
    
        return $this;
    }

    /**
     * Get brewhops7ibu
     *
     * @return string 
     */
    public function getBrewhops7ibu()
    {
        return $this->brewhops7ibu;
    }

    /**
     * Set brewhops7time
     *
     * @param string $brewhops7time
     * @return Brewing
     */
    public function setBrewhops7time($brewhops7time)
    {
        $this->brewhops7time = $brewhops7time;
    
        return $this;
    }

    /**
     * Get brewhops7time
     *
     * @return string 
     */
    public function getBrewhops7time()
    {
        return $this->brewhops7time;
    }

    /**
     * Set brewhops8
     *
     * @param string $brewhops8
     * @return Brewing
     */
    public function setBrewhops8($brewhops8)
    {
        $this->brewhops8 = $brewhops8;
    
        return $this;
    }

    /**
     * Get brewhops8
     *
     * @return string 
     */
    public function getBrewhops8()
    {
        return $this->brewhops8;
    }

    /**
     * Set brewhops8weight
     *
     * @param string $brewhops8weight
     * @return Brewing
     */
    public function setBrewhops8weight($brewhops8weight)
    {
        $this->brewhops8weight = $brewhops8weight;
    
        return $this;
    }

    /**
     * Get brewhops8weight
     *
     * @return string 
     */
    public function getBrewhops8weight()
    {
        return $this->brewhops8weight;
    }

    /**
     * Set brewhops8ibu
     *
     * @param string $brewhops8ibu
     * @return Brewing
     */
    public function setBrewhops8ibu($brewhops8ibu)
    {
        $this->brewhops8ibu = $brewhops8ibu;
    
        return $this;
    }

    /**
     * Get brewhops8ibu
     *
     * @return string 
     */
    public function getBrewhops8ibu()
    {
        return $this->brewhops8ibu;
    }

    /**
     * Set brewhops8time
     *
     * @param string $brewhops8time
     * @return Brewing
     */
    public function setBrewhops8time($brewhops8time)
    {
        $this->brewhops8time = $brewhops8time;
    
        return $this;
    }

    /**
     * Get brewhops8time
     *
     * @return string 
     */
    public function getBrewhops8time()
    {
        return $this->brewhops8time;
    }

    /**
     * Set brewhops9
     *
     * @param string $brewhops9
     * @return Brewing
     */
    public function setBrewhops9($brewhops9)
    {
        $this->brewhops9 = $brewhops9;
    
        return $this;
    }

    /**
     * Get brewhops9
     *
     * @return string 
     */
    public function getBrewhops9()
    {
        return $this->brewhops9;
    }

    /**
     * Set brewhops9weight
     *
     * @param string $brewhops9weight
     * @return Brewing
     */
    public function setBrewhops9weight($brewhops9weight)
    {
        $this->brewhops9weight = $brewhops9weight;
    
        return $this;
    }

    /**
     * Get brewhops9weight
     *
     * @return string 
     */
    public function getBrewhops9weight()
    {
        return $this->brewhops9weight;
    }

    /**
     * Set brewhops9ibu
     *
     * @param string $brewhops9ibu
     * @return Brewing
     */
    public function setBrewhops9ibu($brewhops9ibu)
    {
        $this->brewhops9ibu = $brewhops9ibu;
    
        return $this;
    }

    /**
     * Get brewhops9ibu
     *
     * @return string 
     */
    public function getBrewhops9ibu()
    {
        return $this->brewhops9ibu;
    }

    /**
     * Set brewhops9time
     *
     * @param string $brewhops9time
     * @return Brewing
     */
    public function setBrewhops9time($brewhops9time)
    {
        $this->brewhops9time = $brewhops9time;
    
        return $this;
    }

    /**
     * Get brewhops9time
     *
     * @return string 
     */
    public function getBrewhops9time()
    {
        return $this->brewhops9time;
    }

    /**
     * Set brewhops1use
     *
     * @param string $brewhops1use
     * @return Brewing
     */
    public function setBrewhops1use($brewhops1use)
    {
        $this->brewhops1use = $brewhops1use;
    
        return $this;
    }

    /**
     * Get brewhops1use
     *
     * @return string 
     */
    public function getBrewhops1use()
    {
        return $this->brewhops1use;
    }

    /**
     * Set brewhops2use
     *
     * @param string $brewhops2use
     * @return Brewing
     */
    public function setBrewhops2use($brewhops2use)
    {
        $this->brewhops2use = $brewhops2use;
    
        return $this;
    }

    /**
     * Get brewhops2use
     *
     * @return string 
     */
    public function getBrewhops2use()
    {
        return $this->brewhops2use;
    }

    /**
     * Set brewhops3use
     *
     * @param string $brewhops3use
     * @return Brewing
     */
    public function setBrewhops3use($brewhops3use)
    {
        $this->brewhops3use = $brewhops3use;
    
        return $this;
    }

    /**
     * Get brewhops3use
     *
     * @return string 
     */
    public function getBrewhops3use()
    {
        return $this->brewhops3use;
    }

    /**
     * Set brewhops4use
     *
     * @param string $brewhops4use
     * @return Brewing
     */
    public function setBrewhops4use($brewhops4use)
    {
        $this->brewhops4use = $brewhops4use;
    
        return $this;
    }

    /**
     * Get brewhops4use
     *
     * @return string 
     */
    public function getBrewhops4use()
    {
        return $this->brewhops4use;
    }

    /**
     * Set brewhops5use
     *
     * @param string $brewhops5use
     * @return Brewing
     */
    public function setBrewhops5use($brewhops5use)
    {
        $this->brewhops5use = $brewhops5use;
    
        return $this;
    }

    /**
     * Get brewhops5use
     *
     * @return string 
     */
    public function getBrewhops5use()
    {
        return $this->brewhops5use;
    }

    /**
     * Set brewhops6use
     *
     * @param string $brewhops6use
     * @return Brewing
     */
    public function setBrewhops6use($brewhops6use)
    {
        $this->brewhops6use = $brewhops6use;
    
        return $this;
    }

    /**
     * Get brewhops6use
     *
     * @return string 
     */
    public function getBrewhops6use()
    {
        return $this->brewhops6use;
    }

    /**
     * Set brewhops7use
     *
     * @param string $brewhops7use
     * @return Brewing
     */
    public function setBrewhops7use($brewhops7use)
    {
        $this->brewhops7use = $brewhops7use;
    
        return $this;
    }

    /**
     * Get brewhops7use
     *
     * @return string 
     */
    public function getBrewhops7use()
    {
        return $this->brewhops7use;
    }

    /**
     * Set brewhops8use
     *
     * @param string $brewhops8use
     * @return Brewing
     */
    public function setBrewhops8use($brewhops8use)
    {
        $this->brewhops8use = $brewhops8use;
    
        return $this;
    }

    /**
     * Get brewhops8use
     *
     * @return string 
     */
    public function getBrewhops8use()
    {
        return $this->brewhops8use;
    }

    /**
     * Set brewhops9use
     *
     * @param string $brewhops9use
     * @return Brewing
     */
    public function setBrewhops9use($brewhops9use)
    {
        $this->brewhops9use = $brewhops9use;
    
        return $this;
    }

    /**
     * Get brewhops9use
     *
     * @return string 
     */
    public function getBrewhops9use()
    {
        return $this->brewhops9use;
    }

    /**
     * Set brewhops1type
     *
     * @param string $brewhops1type
     * @return Brewing
     */
    public function setBrewhops1type($brewhops1type)
    {
        $this->brewhops1type = $brewhops1type;
    
        return $this;
    }

    /**
     * Get brewhops1type
     *
     * @return string 
     */
    public function getBrewhops1type()
    {
        return $this->brewhops1type;
    }

    /**
     * Set brewhops2type
     *
     * @param string $brewhops2type
     * @return Brewing
     */
    public function setBrewhops2type($brewhops2type)
    {
        $this->brewhops2type = $brewhops2type;
    
        return $this;
    }

    /**
     * Get brewhops2type
     *
     * @return string 
     */
    public function getBrewhops2type()
    {
        return $this->brewhops2type;
    }

    /**
     * Set brewhops3type
     *
     * @param string $brewhops3type
     * @return Brewing
     */
    public function setBrewhops3type($brewhops3type)
    {
        $this->brewhops3type = $brewhops3type;
    
        return $this;
    }

    /**
     * Get brewhops3type
     *
     * @return string 
     */
    public function getBrewhops3type()
    {
        return $this->brewhops3type;
    }

    /**
     * Set brewhops4type
     *
     * @param string $brewhops4type
     * @return Brewing
     */
    public function setBrewhops4type($brewhops4type)
    {
        $this->brewhops4type = $brewhops4type;
    
        return $this;
    }

    /**
     * Get brewhops4type
     *
     * @return string 
     */
    public function getBrewhops4type()
    {
        return $this->brewhops4type;
    }

    /**
     * Set brewhops5type
     *
     * @param string $brewhops5type
     * @return Brewing
     */
    public function setBrewhops5type($brewhops5type)
    {
        $this->brewhops5type = $brewhops5type;
    
        return $this;
    }

    /**
     * Get brewhops5type
     *
     * @return string 
     */
    public function getBrewhops5type()
    {
        return $this->brewhops5type;
    }

    /**
     * Set brewhops6type
     *
     * @param string $brewhops6type
     * @return Brewing
     */
    public function setBrewhops6type($brewhops6type)
    {
        $this->brewhops6type = $brewhops6type;
    
        return $this;
    }

    /**
     * Get brewhops6type
     *
     * @return string 
     */
    public function getBrewhops6type()
    {
        return $this->brewhops6type;
    }

    /**
     * Set brewhops7type
     *
     * @param string $brewhops7type
     * @return Brewing
     */
    public function setBrewhops7type($brewhops7type)
    {
        $this->brewhops7type = $brewhops7type;
    
        return $this;
    }

    /**
     * Get brewhops7type
     *
     * @return string 
     */
    public function getBrewhops7type()
    {
        return $this->brewhops7type;
    }

    /**
     * Set brewhops8type
     *
     * @param string $brewhops8type
     * @return Brewing
     */
    public function setBrewhops8type($brewhops8type)
    {
        $this->brewhops8type = $brewhops8type;
    
        return $this;
    }

    /**
     * Get brewhops8type
     *
     * @return string 
     */
    public function getBrewhops8type()
    {
        return $this->brewhops8type;
    }

    /**
     * Set brewhops9type
     *
     * @param string $brewhops9type
     * @return Brewing
     */
    public function setBrewhops9type($brewhops9type)
    {
        $this->brewhops9type = $brewhops9type;
    
        return $this;
    }

    /**
     * Get brewhops9type
     *
     * @return string 
     */
    public function getBrewhops9type()
    {
        return $this->brewhops9type;
    }

    /**
     * Set brewhops1form
     *
     * @param string $brewhops1form
     * @return Brewing
     */
    public function setBrewhops1form($brewhops1form)
    {
        $this->brewhops1form = $brewhops1form;
    
        return $this;
    }

    /**
     * Get brewhops1form
     *
     * @return string 
     */
    public function getBrewhops1form()
    {
        return $this->brewhops1form;
    }

    /**
     * Set brewhops2form
     *
     * @param string $brewhops2form
     * @return Brewing
     */
    public function setBrewhops2form($brewhops2form)
    {
        $this->brewhops2form = $brewhops2form;
    
        return $this;
    }

    /**
     * Get brewhops2form
     *
     * @return string 
     */
    public function getBrewhops2form()
    {
        return $this->brewhops2form;
    }

    /**
     * Set brewhops3form
     *
     * @param string $brewhops3form
     * @return Brewing
     */
    public function setBrewhops3form($brewhops3form)
    {
        $this->brewhops3form = $brewhops3form;
    
        return $this;
    }

    /**
     * Get brewhops3form
     *
     * @return string 
     */
    public function getBrewhops3form()
    {
        return $this->brewhops3form;
    }

    /**
     * Set brewhops4form
     *
     * @param string $brewhops4form
     * @return Brewing
     */
    public function setBrewhops4form($brewhops4form)
    {
        $this->brewhops4form = $brewhops4form;
    
        return $this;
    }

    /**
     * Get brewhops4form
     *
     * @return string 
     */
    public function getBrewhops4form()
    {
        return $this->brewhops4form;
    }

    /**
     * Set brewhops5form
     *
     * @param string $brewhops5form
     * @return Brewing
     */
    public function setBrewhops5form($brewhops5form)
    {
        $this->brewhops5form = $brewhops5form;
    
        return $this;
    }

    /**
     * Get brewhops5form
     *
     * @return string 
     */
    public function getBrewhops5form()
    {
        return $this->brewhops5form;
    }

    /**
     * Set brewhops6form
     *
     * @param string $brewhops6form
     * @return Brewing
     */
    public function setBrewhops6form($brewhops6form)
    {
        $this->brewhops6form = $brewhops6form;
    
        return $this;
    }

    /**
     * Get brewhops6form
     *
     * @return string 
     */
    public function getBrewhops6form()
    {
        return $this->brewhops6form;
    }

    /**
     * Set brewhops7form
     *
     * @param string $brewhops7form
     * @return Brewing
     */
    public function setBrewhops7form($brewhops7form)
    {
        $this->brewhops7form = $brewhops7form;
    
        return $this;
    }

    /**
     * Get brewhops7form
     *
     * @return string 
     */
    public function getBrewhops7form()
    {
        return $this->brewhops7form;
    }

    /**
     * Set brewhops8form
     *
     * @param string $brewhops8form
     * @return Brewing
     */
    public function setBrewhops8form($brewhops8form)
    {
        $this->brewhops8form = $brewhops8form;
    
        return $this;
    }

    /**
     * Get brewhops8form
     *
     * @return string 
     */
    public function getBrewhops8form()
    {
        return $this->brewhops8form;
    }

    /**
     * Set brewhops9form
     *
     * @param string $brewhops9form
     * @return Brewing
     */
    public function setBrewhops9form($brewhops9form)
    {
        $this->brewhops9form = $brewhops9form;
    
        return $this;
    }

    /**
     * Get brewhops9form
     *
     * @return string 
     */
    public function getBrewhops9form()
    {
        return $this->brewhops9form;
    }

    /**
     * Set brewhops10
     *
     * @param string $brewhops10
     * @return Brewing
     */
    public function setBrewhops10($brewhops10)
    {
        $this->brewhops10 = $brewhops10;
    
        return $this;
    }

    /**
     * Get brewhops10
     *
     * @return string 
     */
    public function getBrewhops10()
    {
        return $this->brewhops10;
    }

    /**
     * Set brewhops10weight
     *
     * @param string $brewhops10weight
     * @return Brewing
     */
    public function setBrewhops10weight($brewhops10weight)
    {
        $this->brewhops10weight = $brewhops10weight;
    
        return $this;
    }

    /**
     * Get brewhops10weight
     *
     * @return string 
     */
    public function getBrewhops10weight()
    {
        return $this->brewhops10weight;
    }

    /**
     * Set brewhops10ibu
     *
     * @param string $brewhops10ibu
     * @return Brewing
     */
    public function setBrewhops10ibu($brewhops10ibu)
    {
        $this->brewhops10ibu = $brewhops10ibu;
    
        return $this;
    }

    /**
     * Get brewhops10ibu
     *
     * @return string 
     */
    public function getBrewhops10ibu()
    {
        return $this->brewhops10ibu;
    }

    /**
     * Set brewhops10time
     *
     * @param string $brewhops10time
     * @return Brewing
     */
    public function setBrewhops10time($brewhops10time)
    {
        $this->brewhops10time = $brewhops10time;
    
        return $this;
    }

    /**
     * Get brewhops10time
     *
     * @return string 
     */
    public function getBrewhops10time()
    {
        return $this->brewhops10time;
    }

    /**
     * Set brewhops10use
     *
     * @param string $brewhops10use
     * @return Brewing
     */
    public function setBrewhops10use($brewhops10use)
    {
        $this->brewhops10use = $brewhops10use;
    
        return $this;
    }

    /**
     * Get brewhops10use
     *
     * @return string 
     */
    public function getBrewhops10use()
    {
        return $this->brewhops10use;
    }

    /**
     * Set brewhops10type
     *
     * @param string $brewhops10type
     * @return Brewing
     */
    public function setBrewhops10type($brewhops10type)
    {
        $this->brewhops10type = $brewhops10type;
    
        return $this;
    }

    /**
     * Get brewhops10type
     *
     * @return string 
     */
    public function getBrewhops10type()
    {
        return $this->brewhops10type;
    }

    /**
     * Set brewhops10form
     *
     * @param string $brewhops10form
     * @return Brewing
     */
    public function setBrewhops10form($brewhops10form)
    {
        $this->brewhops10form = $brewhops10form;
    
        return $this;
    }

    /**
     * Get brewhops10form
     *
     * @return string 
     */
    public function getBrewhops10form()
    {
        return $this->brewhops10form;
    }

    /**
     * Set brewhops11
     *
     * @param string $brewhops11
     * @return Brewing
     */
    public function setBrewhops11($brewhops11)
    {
        $this->brewhops11 = $brewhops11;
    
        return $this;
    }

    /**
     * Get brewhops11
     *
     * @return string 
     */
    public function getBrewhops11()
    {
        return $this->brewhops11;
    }

    /**
     * Set brewhops11weight
     *
     * @param string $brewhops11weight
     * @return Brewing
     */
    public function setBrewhops11weight($brewhops11weight)
    {
        $this->brewhops11weight = $brewhops11weight;
    
        return $this;
    }

    /**
     * Get brewhops11weight
     *
     * @return string 
     */
    public function getBrewhops11weight()
    {
        return $this->brewhops11weight;
    }

    /**
     * Set brewhops11ibu
     *
     * @param string $brewhops11ibu
     * @return Brewing
     */
    public function setBrewhops11ibu($brewhops11ibu)
    {
        $this->brewhops11ibu = $brewhops11ibu;
    
        return $this;
    }

    /**
     * Get brewhops11ibu
     *
     * @return string 
     */
    public function getBrewhops11ibu()
    {
        return $this->brewhops11ibu;
    }

    /**
     * Set brewhops11time
     *
     * @param string $brewhops11time
     * @return Brewing
     */
    public function setBrewhops11time($brewhops11time)
    {
        $this->brewhops11time = $brewhops11time;
    
        return $this;
    }

    /**
     * Get brewhops11time
     *
     * @return string 
     */
    public function getBrewhops11time()
    {
        return $this->brewhops11time;
    }

    /**
     * Set brewhops11use
     *
     * @param string $brewhops11use
     * @return Brewing
     */
    public function setBrewhops11use($brewhops11use)
    {
        $this->brewhops11use = $brewhops11use;
    
        return $this;
    }

    /**
     * Get brewhops11use
     *
     * @return string 
     */
    public function getBrewhops11use()
    {
        return $this->brewhops11use;
    }

    /**
     * Set brewhops11type
     *
     * @param string $brewhops11type
     * @return Brewing
     */
    public function setBrewhops11type($brewhops11type)
    {
        $this->brewhops11type = $brewhops11type;
    
        return $this;
    }

    /**
     * Get brewhops11type
     *
     * @return string 
     */
    public function getBrewhops11type()
    {
        return $this->brewhops11type;
    }

    /**
     * Set brewhops11form
     *
     * @param string $brewhops11form
     * @return Brewing
     */
    public function setBrewhops11form($brewhops11form)
    {
        $this->brewhops11form = $brewhops11form;
    
        return $this;
    }

    /**
     * Get brewhops11form
     *
     * @return string 
     */
    public function getBrewhops11form()
    {
        return $this->brewhops11form;
    }

    /**
     * Set brewhops12
     *
     * @param string $brewhops12
     * @return Brewing
     */
    public function setBrewhops12($brewhops12)
    {
        $this->brewhops12 = $brewhops12;
    
        return $this;
    }

    /**
     * Get brewhops12
     *
     * @return string 
     */
    public function getBrewhops12()
    {
        return $this->brewhops12;
    }

    /**
     * Set brewhops12weight
     *
     * @param string $brewhops12weight
     * @return Brewing
     */
    public function setBrewhops12weight($brewhops12weight)
    {
        $this->brewhops12weight = $brewhops12weight;
    
        return $this;
    }

    /**
     * Get brewhops12weight
     *
     * @return string 
     */
    public function getBrewhops12weight()
    {
        return $this->brewhops12weight;
    }

    /**
     * Set brewhops12ibu
     *
     * @param string $brewhops12ibu
     * @return Brewing
     */
    public function setBrewhops12ibu($brewhops12ibu)
    {
        $this->brewhops12ibu = $brewhops12ibu;
    
        return $this;
    }

    /**
     * Get brewhops12ibu
     *
     * @return string 
     */
    public function getBrewhops12ibu()
    {
        return $this->brewhops12ibu;
    }

    /**
     * Set brewhops12time
     *
     * @param string $brewhops12time
     * @return Brewing
     */
    public function setBrewhops12time($brewhops12time)
    {
        $this->brewhops12time = $brewhops12time;
    
        return $this;
    }

    /**
     * Get brewhops12time
     *
     * @return string 
     */
    public function getBrewhops12time()
    {
        return $this->brewhops12time;
    }

    /**
     * Set brewhops12use
     *
     * @param string $brewhops12use
     * @return Brewing
     */
    public function setBrewhops12use($brewhops12use)
    {
        $this->brewhops12use = $brewhops12use;
    
        return $this;
    }

    /**
     * Get brewhops12use
     *
     * @return string 
     */
    public function getBrewhops12use()
    {
        return $this->brewhops12use;
    }

    /**
     * Set brewhops12type
     *
     * @param string $brewhops12type
     * @return Brewing
     */
    public function setBrewhops12type($brewhops12type)
    {
        $this->brewhops12type = $brewhops12type;
    
        return $this;
    }

    /**
     * Get brewhops12type
     *
     * @return string 
     */
    public function getBrewhops12type()
    {
        return $this->brewhops12type;
    }

    /**
     * Set brewhops12form
     *
     * @param string $brewhops12form
     * @return Brewing
     */
    public function setBrewhops12form($brewhops12form)
    {
        $this->brewhops12form = $brewhops12form;
    
        return $this;
    }

    /**
     * Get brewhops12form
     *
     * @return string 
     */
    public function getBrewhops12form()
    {
        return $this->brewhops12form;
    }

    /**
     * Set brewhops13
     *
     * @param string $brewhops13
     * @return Brewing
     */
    public function setBrewhops13($brewhops13)
    {
        $this->brewhops13 = $brewhops13;
    
        return $this;
    }

    /**
     * Get brewhops13
     *
     * @return string 
     */
    public function getBrewhops13()
    {
        return $this->brewhops13;
    }

    /**
     * Set brewhops13weight
     *
     * @param string $brewhops13weight
     * @return Brewing
     */
    public function setBrewhops13weight($brewhops13weight)
    {
        $this->brewhops13weight = $brewhops13weight;
    
        return $this;
    }

    /**
     * Get brewhops13weight
     *
     * @return string 
     */
    public function getBrewhops13weight()
    {
        return $this->brewhops13weight;
    }

    /**
     * Set brewhops13ibu
     *
     * @param string $brewhops13ibu
     * @return Brewing
     */
    public function setBrewhops13ibu($brewhops13ibu)
    {
        $this->brewhops13ibu = $brewhops13ibu;
    
        return $this;
    }

    /**
     * Get brewhops13ibu
     *
     * @return string 
     */
    public function getBrewhops13ibu()
    {
        return $this->brewhops13ibu;
    }

    /**
     * Set brewhops13time
     *
     * @param string $brewhops13time
     * @return Brewing
     */
    public function setBrewhops13time($brewhops13time)
    {
        $this->brewhops13time = $brewhops13time;
    
        return $this;
    }

    /**
     * Get brewhops13time
     *
     * @return string 
     */
    public function getBrewhops13time()
    {
        return $this->brewhops13time;
    }

    /**
     * Set brewhops13use
     *
     * @param string $brewhops13use
     * @return Brewing
     */
    public function setBrewhops13use($brewhops13use)
    {
        $this->brewhops13use = $brewhops13use;
    
        return $this;
    }

    /**
     * Get brewhops13use
     *
     * @return string 
     */
    public function getBrewhops13use()
    {
        return $this->brewhops13use;
    }

    /**
     * Set brewhops13type
     *
     * @param string $brewhops13type
     * @return Brewing
     */
    public function setBrewhops13type($brewhops13type)
    {
        $this->brewhops13type = $brewhops13type;
    
        return $this;
    }

    /**
     * Get brewhops13type
     *
     * @return string 
     */
    public function getBrewhops13type()
    {
        return $this->brewhops13type;
    }

    /**
     * Set brewhops13form
     *
     * @param string $brewhops13form
     * @return Brewing
     */
    public function setBrewhops13form($brewhops13form)
    {
        $this->brewhops13form = $brewhops13form;
    
        return $this;
    }

    /**
     * Get brewhops13form
     *
     * @return string 
     */
    public function getBrewhops13form()
    {
        return $this->brewhops13form;
    }

    /**
     * Set brewhops14
     *
     * @param string $brewhops14
     * @return Brewing
     */
    public function setBrewhops14($brewhops14)
    {
        $this->brewhops14 = $brewhops14;
    
        return $this;
    }

    /**
     * Get brewhops14
     *
     * @return string 
     */
    public function getBrewhops14()
    {
        return $this->brewhops14;
    }

    /**
     * Set brewhops14weight
     *
     * @param string $brewhops14weight
     * @return Brewing
     */
    public function setBrewhops14weight($brewhops14weight)
    {
        $this->brewhops14weight = $brewhops14weight;
    
        return $this;
    }

    /**
     * Get brewhops14weight
     *
     * @return string 
     */
    public function getBrewhops14weight()
    {
        return $this->brewhops14weight;
    }

    /**
     * Set brewhops14ibu
     *
     * @param string $brewhops14ibu
     * @return Brewing
     */
    public function setBrewhops14ibu($brewhops14ibu)
    {
        $this->brewhops14ibu = $brewhops14ibu;
    
        return $this;
    }

    /**
     * Get brewhops14ibu
     *
     * @return string 
     */
    public function getBrewhops14ibu()
    {
        return $this->brewhops14ibu;
    }

    /**
     * Set brewhops14time
     *
     * @param string $brewhops14time
     * @return Brewing
     */
    public function setBrewhops14time($brewhops14time)
    {
        $this->brewhops14time = $brewhops14time;
    
        return $this;
    }

    /**
     * Get brewhops14time
     *
     * @return string 
     */
    public function getBrewhops14time()
    {
        return $this->brewhops14time;
    }

    /**
     * Set brewhops14use
     *
     * @param string $brewhops14use
     * @return Brewing
     */
    public function setBrewhops14use($brewhops14use)
    {
        $this->brewhops14use = $brewhops14use;
    
        return $this;
    }

    /**
     * Get brewhops14use
     *
     * @return string 
     */
    public function getBrewhops14use()
    {
        return $this->brewhops14use;
    }

    /**
     * Set brewhops14type
     *
     * @param string $brewhops14type
     * @return Brewing
     */
    public function setBrewhops14type($brewhops14type)
    {
        $this->brewhops14type = $brewhops14type;
    
        return $this;
    }

    /**
     * Get brewhops14type
     *
     * @return string 
     */
    public function getBrewhops14type()
    {
        return $this->brewhops14type;
    }

    /**
     * Set brewhops14form
     *
     * @param string $brewhops14form
     * @return Brewing
     */
    public function setBrewhops14form($brewhops14form)
    {
        $this->brewhops14form = $brewhops14form;
    
        return $this;
    }

    /**
     * Get brewhops14form
     *
     * @return string 
     */
    public function getBrewhops14form()
    {
        return $this->brewhops14form;
    }

    /**
     * Set brewhops15
     *
     * @param string $brewhops15
     * @return Brewing
     */
    public function setBrewhops15($brewhops15)
    {
        $this->brewhops15 = $brewhops15;
    
        return $this;
    }

    /**
     * Get brewhops15
     *
     * @return string 
     */
    public function getBrewhops15()
    {
        return $this->brewhops15;
    }

    /**
     * Set brewhops15weight
     *
     * @param string $brewhops15weight
     * @return Brewing
     */
    public function setBrewhops15weight($brewhops15weight)
    {
        $this->brewhops15weight = $brewhops15weight;
    
        return $this;
    }

    /**
     * Get brewhops15weight
     *
     * @return string 
     */
    public function getBrewhops15weight()
    {
        return $this->brewhops15weight;
    }

    /**
     * Set brewhops15ibu
     *
     * @param string $brewhops15ibu
     * @return Brewing
     */
    public function setBrewhops15ibu($brewhops15ibu)
    {
        $this->brewhops15ibu = $brewhops15ibu;
    
        return $this;
    }

    /**
     * Get brewhops15ibu
     *
     * @return string 
     */
    public function getBrewhops15ibu()
    {
        return $this->brewhops15ibu;
    }

    /**
     * Set brewhops15time
     *
     * @param string $brewhops15time
     * @return Brewing
     */
    public function setBrewhops15time($brewhops15time)
    {
        $this->brewhops15time = $brewhops15time;
    
        return $this;
    }

    /**
     * Get brewhops15time
     *
     * @return string 
     */
    public function getBrewhops15time()
    {
        return $this->brewhops15time;
    }

    /**
     * Set brewhops15use
     *
     * @param string $brewhops15use
     * @return Brewing
     */
    public function setBrewhops15use($brewhops15use)
    {
        $this->brewhops15use = $brewhops15use;
    
        return $this;
    }

    /**
     * Get brewhops15use
     *
     * @return string 
     */
    public function getBrewhops15use()
    {
        return $this->brewhops15use;
    }

    /**
     * Set brewhops15type
     *
     * @param string $brewhops15type
     * @return Brewing
     */
    public function setBrewhops15type($brewhops15type)
    {
        $this->brewhops15type = $brewhops15type;
    
        return $this;
    }

    /**
     * Get brewhops15type
     *
     * @return string 
     */
    public function getBrewhops15type()
    {
        return $this->brewhops15type;
    }

    /**
     * Set brewhops15form
     *
     * @param string $brewhops15form
     * @return Brewing
     */
    public function setBrewhops15form($brewhops15form)
    {
        $this->brewhops15form = $brewhops15form;
    
        return $this;
    }

    /**
     * Get brewhops15form
     *
     * @return string 
     */
    public function getBrewhops15form()
    {
        return $this->brewhops15form;
    }

    /**
     * Set brewyeast
     *
     * @param string $brewyeast
     * @return Brewing
     */
    public function setBrewyeast($brewyeast)
    {
        $this->brewyeast = $brewyeast;
    
        return $this;
    }

    /**
     * Get brewyeast
     *
     * @return string 
     */
    public function getBrewyeast()
    {
        return $this->brewyeast;
    }

    /**
     * Set brewyeastman
     *
     * @param string $brewyeastman
     * @return Brewing
     */
    public function setBrewyeastman($brewyeastman)
    {
        $this->brewyeastman = $brewyeastman;
    
        return $this;
    }

    /**
     * Get brewyeastman
     *
     * @return string 
     */
    public function getBrewyeastman()
    {
        return $this->brewyeastman;
    }

    /**
     * Set brewyeastform
     *
     * @param string $brewyeastform
     * @return Brewing
     */
    public function setBrewyeastform($brewyeastform)
    {
        $this->brewyeastform = $brewyeastform;
    
        return $this;
    }

    /**
     * Get brewyeastform
     *
     * @return string 
     */
    public function getBrewyeastform()
    {
        return $this->brewyeastform;
    }

    /**
     * Set brewyeasttype
     *
     * @param string $brewyeasttype
     * @return Brewing
     */
    public function setBrewyeasttype($brewyeasttype)
    {
        $this->brewyeasttype = $brewyeasttype;
    
        return $this;
    }

    /**
     * Get brewyeasttype
     *
     * @return string 
     */
    public function getBrewyeasttype()
    {
        return $this->brewyeasttype;
    }

    /**
     * Set brewyeastamount
     *
     * @param string $brewyeastamount
     * @return Brewing
     */
    public function setBrewyeastamount($brewyeastamount)
    {
        $this->brewyeastamount = $brewyeastamount;
    
        return $this;
    }

    /**
     * Get brewyeastamount
     *
     * @return string 
     */
    public function getBrewyeastamount()
    {
        return $this->brewyeastamount;
    }

    /**
     * Set brewlabelimage
     *
     * @param string $brewlabelimage
     * @return Brewing
     */
    public function setBrewlabelimage($brewlabelimage)
    {
        $this->brewlabelimage = $brewlabelimage;
    
        return $this;
    }

    /**
     * Get brewlabelimage
     *
     * @return string 
     */
    public function getBrewlabelimage()
    {
        return $this->brewlabelimage;
    }

    /**
     * Set brewog
     *
     * @param string $brewog
     * @return Brewing
     */
    public function setBrewog($brewog)
    {
        $this->brewog = $brewog;
    
        return $this;
    }

    /**
     * Get brewog
     *
     * @return string 
     */
    public function getBrewog()
    {
        return $this->brewog;
    }

    /**
     * Set brewfg
     *
     * @param string $brewfg
     * @return Brewing
     */
    public function setBrewfg($brewfg)
    {
        $this->brewfg = $brewfg;
    
        return $this;
    }

    /**
     * Get brewfg
     *
     * @return string 
     */
    public function getBrewfg()
    {
        return $this->brewfg;
    }

    /**
     * Set brewgravity1
     *
     * @param string $brewgravity1
     * @return Brewing
     */
    public function setBrewgravity1($brewgravity1)
    {
        $this->brewgravity1 = $brewgravity1;
    
        return $this;
    }

    /**
     * Get brewgravity1
     *
     * @return string 
     */
    public function getBrewgravity1()
    {
        return $this->brewgravity1;
    }

    /**
     * Set brewgravity1days
     *
     * @param string $brewgravity1days
     * @return Brewing
     */
    public function setBrewgravity1days($brewgravity1days)
    {
        $this->brewgravity1days = $brewgravity1days;
    
        return $this;
    }

    /**
     * Get brewgravity1days
     *
     * @return string 
     */
    public function getBrewgravity1days()
    {
        return $this->brewgravity1days;
    }

    /**
     * Set brewgravity2
     *
     * @param string $brewgravity2
     * @return Brewing
     */
    public function setBrewgravity2($brewgravity2)
    {
        $this->brewgravity2 = $brewgravity2;
    
        return $this;
    }

    /**
     * Get brewgravity2
     *
     * @return string 
     */
    public function getBrewgravity2()
    {
        return $this->brewgravity2;
    }

    /**
     * Set brewgravity2days
     *
     * @param string $brewgravity2days
     * @return Brewing
     */
    public function setBrewgravity2days($brewgravity2days)
    {
        $this->brewgravity2days = $brewgravity2days;
    
        return $this;
    }

    /**
     * Get brewgravity2days
     *
     * @return string 
     */
    public function getBrewgravity2days()
    {
        return $this->brewgravity2days;
    }

    /**
     * Set brewprocedure
     *
     * @param string $brewprocedure
     * @return Brewing
     */
    public function setBrewprocedure($brewprocedure)
    {
        $this->brewprocedure = $brewprocedure;
    
        return $this;
    }

    /**
     * Get brewprocedure
     *
     * @return string 
     */
    public function getBrewprocedure()
    {
        return $this->brewprocedure;
    }

    /**
     * Set brewspecialprocedure
     *
     * @param string $brewspecialprocedure
     * @return Brewing
     */
    public function setBrewspecialprocedure($brewspecialprocedure)
    {
        $this->brewspecialprocedure = $brewspecialprocedure;
    
        return $this;
    }

    /**
     * Get brewspecialprocedure
     *
     * @return string 
     */
    public function getBrewspecialprocedure()
    {
        return $this->brewspecialprocedure;
    }

    /**
     * Set brewprimary
     *
     * @param string $brewprimary
     * @return Brewing
     */
    public function setBrewprimary($brewprimary)
    {
        $this->brewprimary = $brewprimary;
    
        return $this;
    }

    /**
     * Get brewprimary
     *
     * @return string 
     */
    public function getBrewprimary()
    {
        return $this->brewprimary;
    }

    /**
     * Set brewprimarytemp
     *
     * @param string $brewprimarytemp
     * @return Brewing
     */
    public function setBrewprimarytemp($brewprimarytemp)
    {
        $this->brewprimarytemp = $brewprimarytemp;
    
        return $this;
    }

    /**
     * Get brewprimarytemp
     *
     * @return string 
     */
    public function getBrewprimarytemp()
    {
        return $this->brewprimarytemp;
    }

    /**
     * Set brewsecondary
     *
     * @param string $brewsecondary
     * @return Brewing
     */
    public function setBrewsecondary($brewsecondary)
    {
        $this->brewsecondary = $brewsecondary;
    
        return $this;
    }

    /**
     * Get brewsecondary
     *
     * @return string 
     */
    public function getBrewsecondary()
    {
        return $this->brewsecondary;
    }

    /**
     * Set brewsecondarytemp
     *
     * @param string $brewsecondarytemp
     * @return Brewing
     */
    public function setBrewsecondarytemp($brewsecondarytemp)
    {
        $this->brewsecondarytemp = $brewsecondarytemp;
    
        return $this;
    }

    /**
     * Get brewsecondarytemp
     *
     * @return string 
     */
    public function getBrewsecondarytemp()
    {
        return $this->brewsecondarytemp;
    }

    /**
     * Set brewtertiary
     *
     * @param string $brewtertiary
     * @return Brewing
     */
    public function setBrewtertiary($brewtertiary)
    {
        $this->brewtertiary = $brewtertiary;
    
        return $this;
    }

    /**
     * Get brewtertiary
     *
     * @return string 
     */
    public function getBrewtertiary()
    {
        return $this->brewtertiary;
    }

    /**
     * Set brewtertiarytemp
     *
     * @param string $brewtertiarytemp
     * @return Brewing
     */
    public function setBrewtertiarytemp($brewtertiarytemp)
    {
        $this->brewtertiarytemp = $brewtertiarytemp;
    
        return $this;
    }

    /**
     * Get brewtertiarytemp
     *
     * @return string 
     */
    public function getBrewtertiarytemp()
    {
        return $this->brewtertiarytemp;
    }

    /**
     * Set brewlager
     *
     * @param string $brewlager
     * @return Brewing
     */
    public function setBrewlager($brewlager)
    {
        $this->brewlager = $brewlager;
    
        return $this;
    }

    /**
     * Get brewlager
     *
     * @return string 
     */
    public function getBrewlager()
    {
        return $this->brewlager;
    }

    /**
     * Set brewlagertemp
     *
     * @param string $brewlagertemp
     * @return Brewing
     */
    public function setBrewlagertemp($brewlagertemp)
    {
        $this->brewlagertemp = $brewlagertemp;
    
        return $this;
    }

    /**
     * Get brewlagertemp
     *
     * @return string 
     */
    public function getBrewlagertemp()
    {
        return $this->brewlagertemp;
    }

    /**
     * Set brewage
     *
     * @param string $brewage
     * @return Brewing
     */
    public function setBrewage($brewage)
    {
        $this->brewage = $brewage;
    
        return $this;
    }

    /**
     * Get brewage
     *
     * @return string 
     */
    public function getBrewage()
    {
        return $this->brewage;
    }

    /**
     * Set brewagetemp
     *
     * @param string $brewagetemp
     * @return Brewing
     */
    public function setBrewagetemp($brewagetemp)
    {
        $this->brewagetemp = $brewagetemp;
    
        return $this;
    }

    /**
     * Get brewagetemp
     *
     * @return string 
     */
    public function getBrewagetemp()
    {
        return $this->brewagetemp;
    }

    /**
     * Set brewbitterness
     *
     * @param float $brewbitterness
     * @return Brewing
     */
    public function setBrewbitterness($brewbitterness)
    {
        $this->brewbitterness = $brewbitterness;
    
        return $this;
    }

    /**
     * Get brewbitterness
     *
     * @return float 
     */
    public function getBrewbitterness()
    {
        return $this->brewbitterness;
    }

    /**
     * Set brewibuformula
     *
     * @param string $brewibuformula
     * @return Brewing
     */
    public function setBrewibuformula($brewibuformula)
    {
        $this->brewibuformula = $brewibuformula;
    
        return $this;
    }

    /**
     * Get brewibuformula
     *
     * @return string 
     */
    public function getBrewibuformula()
    {
        return $this->brewibuformula;
    }

    /**
     * Set brewlovibond
     *
     * @param float $brewlovibond
     * @return Brewing
     */
    public function setBrewlovibond($brewlovibond)
    {
        $this->brewlovibond = $brewlovibond;
    
        return $this;
    }

    /**
     * Get brewlovibond
     *
     * @return float 
     */
    public function getBrewlovibond()
    {
        return $this->brewlovibond;
    }

    /**
     * Set brewcolorformula
     *
     * @param string $brewcolorformula
     * @return Brewing
     */
    public function setBrewcolorformula($brewcolorformula)
    {
        $this->brewcolorformula = $brewcolorformula;
    
        return $this;
    }

    /**
     * Get brewcolorformula
     *
     * @return string 
     */
    public function getBrewcolorformula()
    {
        return $this->brewcolorformula;
    }

    /**
     * Set brewcomments
     *
     * @param string $brewcomments
     * @return Brewing
     */
    public function setBrewcomments($brewcomments)
    {
        $this->brewcomments = $brewcomments;
    
        return $this;
    }

    /**
     * Get brewcomments
     *
     * @return string 
     */
    public function getBrewcomments()
    {
        return $this->brewcomments;
    }

    /**
     * Set brewmashtype
     *
     * @param string $brewmashtype
     * @return Brewing
     */
    public function setBrewmashtype($brewmashtype)
    {
        $this->brewmashtype = $brewmashtype;
    
        return $this;
    }

    /**
     * Get brewmashtype
     *
     * @return string 
     */
    public function getBrewmashtype()
    {
        return $this->brewmashtype;
    }

    /**
     * Set brewmashgrainweight
     *
     * @param string $brewmashgrainweight
     * @return Brewing
     */
    public function setBrewmashgrainweight($brewmashgrainweight)
    {
        $this->brewmashgrainweight = $brewmashgrainweight;
    
        return $this;
    }

    /**
     * Get brewmashgrainweight
     *
     * @return string 
     */
    public function getBrewmashgrainweight()
    {
        return $this->brewmashgrainweight;
    }

    /**
     * Set brewmashgraintemp
     *
     * @param string $brewmashgraintemp
     * @return Brewing
     */
    public function setBrewmashgraintemp($brewmashgraintemp)
    {
        $this->brewmashgraintemp = $brewmashgraintemp;
    
        return $this;
    }

    /**
     * Get brewmashgraintemp
     *
     * @return string 
     */
    public function getBrewmashgraintemp()
    {
        return $this->brewmashgraintemp;
    }

    /**
     * Set brewmashtuntemp
     *
     * @param string $brewmashtuntemp
     * @return Brewing
     */
    public function setBrewmashtuntemp($brewmashtuntemp)
    {
        $this->brewmashtuntemp = $brewmashtuntemp;
    
        return $this;
    }

    /**
     * Get brewmashtuntemp
     *
     * @return string 
     */
    public function getBrewmashtuntemp()
    {
        return $this->brewmashtuntemp;
    }

    /**
     * Set brewmashspargamt
     *
     * @param string $brewmashspargamt
     * @return Brewing
     */
    public function setBrewmashspargamt($brewmashspargamt)
    {
        $this->brewmashspargamt = $brewmashspargamt;
    
        return $this;
    }

    /**
     * Get brewmashspargamt
     *
     * @return string 
     */
    public function getBrewmashspargamt()
    {
        return $this->brewmashspargamt;
    }

    /**
     * Set brewmashspargetemp
     *
     * @param string $brewmashspargetemp
     * @return Brewing
     */
    public function setBrewmashspargetemp($brewmashspargetemp)
    {
        $this->brewmashspargetemp = $brewmashspargetemp;
    
        return $this;
    }

    /**
     * Get brewmashspargetemp
     *
     * @return string 
     */
    public function getBrewmashspargetemp()
    {
        return $this->brewmashspargetemp;
    }

    /**
     * Set brewmashequipadjust
     *
     * @param string $brewmashequipadjust
     * @return Brewing
     */
    public function setBrewmashequipadjust($brewmashequipadjust)
    {
        $this->brewmashequipadjust = $brewmashequipadjust;
    
        return $this;
    }

    /**
     * Get brewmashequipadjust
     *
     * @return string 
     */
    public function getBrewmashequipadjust()
    {
        return $this->brewmashequipadjust;
    }

    /**
     * Set brewmashph
     *
     * @param string $brewmashph
     * @return Brewing
     */
    public function setBrewmashph($brewmashph)
    {
        $this->brewmashph = $brewmashph;
    
        return $this;
    }

    /**
     * Get brewmashph
     *
     * @return string 
     */
    public function getBrewmashph()
    {
        return $this->brewmashph;
    }

    /**
     * Set brewmashstep1name
     *
     * @param string $brewmashstep1name
     * @return Brewing
     */
    public function setBrewmashstep1name($brewmashstep1name)
    {
        $this->brewmashstep1name = $brewmashstep1name;
    
        return $this;
    }

    /**
     * Get brewmashstep1name
     *
     * @return string 
     */
    public function getBrewmashstep1name()
    {
        return $this->brewmashstep1name;
    }

    /**
     * Set brewmashstep1desc
     *
     * @param string $brewmashstep1desc
     * @return Brewing
     */
    public function setBrewmashstep1desc($brewmashstep1desc)
    {
        $this->brewmashstep1desc = $brewmashstep1desc;
    
        return $this;
    }

    /**
     * Get brewmashstep1desc
     *
     * @return string 
     */
    public function getBrewmashstep1desc()
    {
        return $this->brewmashstep1desc;
    }

    /**
     * Set brewmashstep1temp
     *
     * @param string $brewmashstep1temp
     * @return Brewing
     */
    public function setBrewmashstep1temp($brewmashstep1temp)
    {
        $this->brewmashstep1temp = $brewmashstep1temp;
    
        return $this;
    }

    /**
     * Get brewmashstep1temp
     *
     * @return string 
     */
    public function getBrewmashstep1temp()
    {
        return $this->brewmashstep1temp;
    }

    /**
     * Set brewmashstep1time
     *
     * @param string $brewmashstep1time
     * @return Brewing
     */
    public function setBrewmashstep1time($brewmashstep1time)
    {
        $this->brewmashstep1time = $brewmashstep1time;
    
        return $this;
    }

    /**
     * Get brewmashstep1time
     *
     * @return string 
     */
    public function getBrewmashstep1time()
    {
        return $this->brewmashstep1time;
    }

    /**
     * Set brewmashstep2name
     *
     * @param string $brewmashstep2name
     * @return Brewing
     */
    public function setBrewmashstep2name($brewmashstep2name)
    {
        $this->brewmashstep2name = $brewmashstep2name;
    
        return $this;
    }

    /**
     * Get brewmashstep2name
     *
     * @return string 
     */
    public function getBrewmashstep2name()
    {
        return $this->brewmashstep2name;
    }

    /**
     * Set brewmashstep2desc
     *
     * @param string $brewmashstep2desc
     * @return Brewing
     */
    public function setBrewmashstep2desc($brewmashstep2desc)
    {
        $this->brewmashstep2desc = $brewmashstep2desc;
    
        return $this;
    }

    /**
     * Get brewmashstep2desc
     *
     * @return string 
     */
    public function getBrewmashstep2desc()
    {
        return $this->brewmashstep2desc;
    }

    /**
     * Set brewmashstep2temp
     *
     * @param string $brewmashstep2temp
     * @return Brewing
     */
    public function setBrewmashstep2temp($brewmashstep2temp)
    {
        $this->brewmashstep2temp = $brewmashstep2temp;
    
        return $this;
    }

    /**
     * Get brewmashstep2temp
     *
     * @return string 
     */
    public function getBrewmashstep2temp()
    {
        return $this->brewmashstep2temp;
    }

    /**
     * Set brewmashstep2time
     *
     * @param string $brewmashstep2time
     * @return Brewing
     */
    public function setBrewmashstep2time($brewmashstep2time)
    {
        $this->brewmashstep2time = $brewmashstep2time;
    
        return $this;
    }

    /**
     * Get brewmashstep2time
     *
     * @return string 
     */
    public function getBrewmashstep2time()
    {
        return $this->brewmashstep2time;
    }

    /**
     * Set brewmashstep3name
     *
     * @param string $brewmashstep3name
     * @return Brewing
     */
    public function setBrewmashstep3name($brewmashstep3name)
    {
        $this->brewmashstep3name = $brewmashstep3name;
    
        return $this;
    }

    /**
     * Get brewmashstep3name
     *
     * @return string 
     */
    public function getBrewmashstep3name()
    {
        return $this->brewmashstep3name;
    }

    /**
     * Set brewmashstep3desc
     *
     * @param string $brewmashstep3desc
     * @return Brewing
     */
    public function setBrewmashstep3desc($brewmashstep3desc)
    {
        $this->brewmashstep3desc = $brewmashstep3desc;
    
        return $this;
    }

    /**
     * Get brewmashstep3desc
     *
     * @return string 
     */
    public function getBrewmashstep3desc()
    {
        return $this->brewmashstep3desc;
    }

    /**
     * Set brewmashstep3temp
     *
     * @param string $brewmashstep3temp
     * @return Brewing
     */
    public function setBrewmashstep3temp($brewmashstep3temp)
    {
        $this->brewmashstep3temp = $brewmashstep3temp;
    
        return $this;
    }

    /**
     * Get brewmashstep3temp
     *
     * @return string 
     */
    public function getBrewmashstep3temp()
    {
        return $this->brewmashstep3temp;
    }

    /**
     * Set brewmashstep3time
     *
     * @param string $brewmashstep3time
     * @return Brewing
     */
    public function setBrewmashstep3time($brewmashstep3time)
    {
        $this->brewmashstep3time = $brewmashstep3time;
    
        return $this;
    }

    /**
     * Get brewmashstep3time
     *
     * @return string 
     */
    public function getBrewmashstep3time()
    {
        return $this->brewmashstep3time;
    }

    /**
     * Set brewmashstep4name
     *
     * @param string $brewmashstep4name
     * @return Brewing
     */
    public function setBrewmashstep4name($brewmashstep4name)
    {
        $this->brewmashstep4name = $brewmashstep4name;
    
        return $this;
    }

    /**
     * Get brewmashstep4name
     *
     * @return string 
     */
    public function getBrewmashstep4name()
    {
        return $this->brewmashstep4name;
    }

    /**
     * Set brewmashstep4desc
     *
     * @param string $brewmashstep4desc
     * @return Brewing
     */
    public function setBrewmashstep4desc($brewmashstep4desc)
    {
        $this->brewmashstep4desc = $brewmashstep4desc;
    
        return $this;
    }

    /**
     * Get brewmashstep4desc
     *
     * @return string 
     */
    public function getBrewmashstep4desc()
    {
        return $this->brewmashstep4desc;
    }

    /**
     * Set brewmashstep4temp
     *
     * @param string $brewmashstep4temp
     * @return Brewing
     */
    public function setBrewmashstep4temp($brewmashstep4temp)
    {
        $this->brewmashstep4temp = $brewmashstep4temp;
    
        return $this;
    }

    /**
     * Get brewmashstep4temp
     *
     * @return string 
     */
    public function getBrewmashstep4temp()
    {
        return $this->brewmashstep4temp;
    }

    /**
     * Set brewmashstep4time
     *
     * @param string $brewmashstep4time
     * @return Brewing
     */
    public function setBrewmashstep4time($brewmashstep4time)
    {
        $this->brewmashstep4time = $brewmashstep4time;
    
        return $this;
    }

    /**
     * Get brewmashstep4time
     *
     * @return string 
     */
    public function getBrewmashstep4time()
    {
        return $this->brewmashstep4time;
    }

    /**
     * Set brewmashstep5name
     *
     * @param string $brewmashstep5name
     * @return Brewing
     */
    public function setBrewmashstep5name($brewmashstep5name)
    {
        $this->brewmashstep5name = $brewmashstep5name;
    
        return $this;
    }

    /**
     * Get brewmashstep5name
     *
     * @return string 
     */
    public function getBrewmashstep5name()
    {
        return $this->brewmashstep5name;
    }

    /**
     * Set brewmashstep5desc
     *
     * @param string $brewmashstep5desc
     * @return Brewing
     */
    public function setBrewmashstep5desc($brewmashstep5desc)
    {
        $this->brewmashstep5desc = $brewmashstep5desc;
    
        return $this;
    }

    /**
     * Get brewmashstep5desc
     *
     * @return string 
     */
    public function getBrewmashstep5desc()
    {
        return $this->brewmashstep5desc;
    }

    /**
     * Set brewmashstep5temp
     *
     * @param string $brewmashstep5temp
     * @return Brewing
     */
    public function setBrewmashstep5temp($brewmashstep5temp)
    {
        $this->brewmashstep5temp = $brewmashstep5temp;
    
        return $this;
    }

    /**
     * Get brewmashstep5temp
     *
     * @return string 
     */
    public function getBrewmashstep5temp()
    {
        return $this->brewmashstep5temp;
    }

    /**
     * Set brewmashstep5time
     *
     * @param string $brewmashstep5time
     * @return Brewing
     */
    public function setBrewmashstep5time($brewmashstep5time)
    {
        $this->brewmashstep5time = $brewmashstep5time;
    
        return $this;
    }

    /**
     * Get brewmashstep5time
     *
     * @return string 
     */
    public function getBrewmashstep5time()
    {
        return $this->brewmashstep5time;
    }

    /**
     * Set brewwatername
     *
     * @param string $brewwatername
     * @return Brewing
     */
    public function setBrewwatername($brewwatername)
    {
        $this->brewwatername = $brewwatername;
    
        return $this;
    }

    /**
     * Get brewwatername
     *
     * @return string 
     */
    public function getBrewwatername()
    {
        return $this->brewwatername;
    }

    /**
     * Set brewwateramount
     *
     * @param string $brewwateramount
     * @return Brewing
     */
    public function setBrewwateramount($brewwateramount)
    {
        $this->brewwateramount = $brewwateramount;
    
        return $this;
    }

    /**
     * Get brewwateramount
     *
     * @return string 
     */
    public function getBrewwateramount()
    {
        return $this->brewwateramount;
    }

    /**
     * Set brewwatercalcium
     *
     * @param string $brewwatercalcium
     * @return Brewing
     */
    public function setBrewwatercalcium($brewwatercalcium)
    {
        $this->brewwatercalcium = $brewwatercalcium;
    
        return $this;
    }

    /**
     * Get brewwatercalcium
     *
     * @return string 
     */
    public function getBrewwatercalcium()
    {
        return $this->brewwatercalcium;
    }

    /**
     * Set brewwaterbicarb
     *
     * @param string $brewwaterbicarb
     * @return Brewing
     */
    public function setBrewwaterbicarb($brewwaterbicarb)
    {
        $this->brewwaterbicarb = $brewwaterbicarb;
    
        return $this;
    }

    /**
     * Get brewwaterbicarb
     *
     * @return string 
     */
    public function getBrewwaterbicarb()
    {
        return $this->brewwaterbicarb;
    }

    /**
     * Set brewwatersulfate
     *
     * @param string $brewwatersulfate
     * @return Brewing
     */
    public function setBrewwatersulfate($brewwatersulfate)
    {
        $this->brewwatersulfate = $brewwatersulfate;
    
        return $this;
    }

    /**
     * Get brewwatersulfate
     *
     * @return string 
     */
    public function getBrewwatersulfate()
    {
        return $this->brewwatersulfate;
    }

    /**
     * Set brewwaterchloride
     *
     * @param string $brewwaterchloride
     * @return Brewing
     */
    public function setBrewwaterchloride($brewwaterchloride)
    {
        $this->brewwaterchloride = $brewwaterchloride;
    
        return $this;
    }

    /**
     * Get brewwaterchloride
     *
     * @return string 
     */
    public function getBrewwaterchloride()
    {
        return $this->brewwaterchloride;
    }

    /**
     * Set brewwatermagnesium
     *
     * @param string $brewwatermagnesium
     * @return Brewing
     */
    public function setBrewwatermagnesium($brewwatermagnesium)
    {
        $this->brewwatermagnesium = $brewwatermagnesium;
    
        return $this;
    }

    /**
     * Get brewwatermagnesium
     *
     * @return string 
     */
    public function getBrewwatermagnesium()
    {
        return $this->brewwatermagnesium;
    }

    /**
     * Set brewwaterph
     *
     * @param string $brewwaterph
     * @return Brewing
     */
    public function setBrewwaterph($brewwaterph)
    {
        $this->brewwaterph = $brewwaterph;
    
        return $this;
    }

    /**
     * Get brewwaterph
     *
     * @return string 
     */
    public function getBrewwaterph()
    {
        return $this->brewwaterph;
    }

    /**
     * Set brewwaternotes
     *
     * @param string $brewwaternotes
     * @return Brewing
     */
    public function setBrewwaternotes($brewwaternotes)
    {
        $this->brewwaternotes = $brewwaternotes;
    
        return $this;
    }

    /**
     * Get brewwaternotes
     *
     * @return string 
     */
    public function getBrewwaternotes()
    {
        return $this->brewwaternotes;
    }

    /**
     * Set brewwatersodium
     *
     * @param string $brewwatersodium
     * @return Brewing
     */
    public function setBrewwatersodium($brewwatersodium)
    {
        $this->brewwatersodium = $brewwatersodium;
    
        return $this;
    }

    /**
     * Get brewwatersodium
     *
     * @return string 
     */
    public function getBrewwatersodium()
    {
        return $this->brewwatersodium;
    }

    /**
     * Set brewefficiency
     *
     * @param string $brewefficiency
     * @return Brewing
     */
    public function setBrewefficiency($brewefficiency)
    {
        $this->brewefficiency = $brewefficiency;
    
        return $this;
    }

    /**
     * Get brewefficiency
     *
     * @return string 
     */
    public function getBrewefficiency()
    {
        return $this->brewefficiency;
    }

    /**
     * Set brewppg
     *
     * @param string $brewppg
     * @return Brewing
     */
    public function setBrewppg($brewppg)
    {
        $this->brewppg = $brewppg;
    
        return $this;
    }

    /**
     * Get brewppg
     *
     * @return string 
     */
    public function getBrewppg()
    {
        return $this->brewppg;
    }

    /**
     * Set brewstatus
     *
     * @param string $brewstatus
     * @return Brewing
     */
    public function setBrewstatus($brewstatus)
    {
        $this->brewstatus = $brewstatus;
    
        return $this;
    }

    /**
     * Get brewstatus
     *
     * @return string 
     */
    public function getBrewstatus()
    {
        return $this->brewstatus;
    }

    /**
     * Set brewtapdate
     *
     * @param \DateTime $brewtapdate
     * @return Brewing
     */
    public function setBrewtapdate($brewtapdate)
    {
        $this->brewtapdate = $brewtapdate;
    
        return $this;
    }

    /**
     * Get brewtapdate
     *
     * @return \DateTime 
     */
    public function getBrewtapdate()
    {
        return $this->brewtapdate;
    }

    /**
     * Set brewmashgravity
     *
     * @param string $brewmashgravity
     * @return Brewing
     */
    public function setBrewmashgravity($brewmashgravity)
    {
        $this->brewmashgravity = $brewmashgravity;
    
        return $this;
    }

    /**
     * Get brewmashgravity
     *
     * @return string 
     */
    public function getBrewmashgravity()
    {
        return $this->brewmashgravity;
    }

    /**
     * Set brewpreboilamt
     *
     * @param string $brewpreboilamt
     * @return Brewing
     */
    public function setBrewpreboilamt($brewpreboilamt)
    {
        $this->brewpreboilamt = $brewpreboilamt;
    
        return $this;
    }

    /**
     * Get brewpreboilamt
     *
     * @return string 
     */
    public function getBrewpreboilamt()
    {
        return $this->brewpreboilamt;
    }

    /**
     * Set brewbrewerid
     *
     * @param string $brewbrewerid
     * @return Brewing
     */
    public function setBrewbrewerid($brewbrewerid)
    {
        $this->brewbrewerid = $brewbrewerid;
    
        return $this;
    }

    /**
     * Get brewbrewerid
     *
     * @return string 
     */
    public function getBrewbrewerid()
    {
        return $this->brewbrewerid;
    }

    /**
     * Set brewtargetog
     *
     * @param string $brewtargetog
     * @return Brewing
     */
    public function setBrewtargetog($brewtargetog)
    {
        $this->brewtargetog = $brewtargetog;
    
        return $this;
    }

    /**
     * Get brewtargetog
     *
     * @return string 
     */
    public function getBrewtargetog()
    {
        return $this->brewtargetog;
    }

    /**
     * Set brewtargetfg
     *
     * @param string $brewtargetfg
     * @return Brewing
     */
    public function setBrewtargetfg($brewtargetfg)
    {
        $this->brewtargetfg = $brewtargetfg;
    
        return $this;
    }

    /**
     * Get brewtargetfg
     *
     * @return string 
     */
    public function getBrewtargetfg()
    {
        return $this->brewtargetfg;
    }

    /**
     * Set brewmashprofile
     *
     * @param integer $brewmashprofile
     * @return Brewing
     */
    public function setBrewmashprofile($brewmashprofile)
    {
        $this->brewmashprofile = $brewmashprofile;
    
        return $this;
    }

    /**
     * Get brewmashprofile
     *
     * @return integer 
     */
    public function getBrewmashprofile()
    {
        return $this->brewmashprofile;
    }

    /**
     * Set brewwaterprofile
     *
     * @param integer $brewwaterprofile
     * @return Brewing
     */
    public function setBrewwaterprofile($brewwaterprofile)
    {
        $this->brewwaterprofile = $brewwaterprofile;
    
        return $this;
    }

    /**
     * Get brewwaterprofile
     *
     * @return integer 
     */
    public function getBrewwaterprofile()
    {
        return $this->brewwaterprofile;
    }

    /**
     * Set brewyeastprofile
     *
     * @param integer $brewyeastprofile
     * @return Brewing
     */
    public function setBrewyeastprofile($brewyeastprofile)
    {
        $this->brewyeastprofile = $brewyeastprofile;
    
        return $this;
    }

    /**
     * Get brewyeastprofile
     *
     * @return integer 
     */
    public function getBrewyeastprofile()
    {
        return $this->brewyeastprofile;
    }

    /**
     * Set brewequipprofile
     *
     * @param integer $brewequipprofile
     * @return Brewing
     */
    public function setBrewequipprofile($brewequipprofile)
    {
        $this->brewequipprofile = $brewequipprofile;
    
        return $this;
    }

    /**
     * Get brewequipprofile
     *
     * @return integer 
     */
    public function getBrewequipprofile()
    {
        return $this->brewequipprofile;
    }

    /**
     * Set brewboiltime
     *
     * @param integer $brewboiltime
     * @return Brewing
     */
    public function setBrewboiltime($brewboiltime)
    {
        $this->brewboiltime = $brewboiltime;
    
        return $this;
    }

    /**
     * Get brewboiltime
     *
     * @return integer 
     */
    public function getBrewboiltime()
    {
        return $this->brewboiltime;
    }

    /**
     * Set brewfeatured
     *
     * @param string $brewfeatured
     * @return Brewing
     */
    public function setBrewfeatured($brewfeatured)
    {
        $this->brewfeatured = $brewfeatured;
    
        return $this;
    }

    /**
     * Get brewfeatured
     *
     * @return string 
     */
    public function getBrewfeatured()
    {
        return $this->brewfeatured;
    }

    /**
     * Set brewwaterratio
     *
     * @param string $brewwaterratio
     * @return Brewing
     */
    public function setBrewwaterratio($brewwaterratio)
    {
        $this->brewwaterratio = $brewwaterratio;
    
        return $this;
    }

    /**
     * Get brewwaterratio
     *
     * @return string 
     */
    public function getBrewwaterratio()
    {
        return $this->brewwaterratio;
    }

    /**
     * Set brewarchive
     *
     * @param string $brewarchive
     * @return Brewing
     */
    public function setBrewarchive($brewarchive)
    {
        $this->brewarchive = $brewarchive;
    
        return $this;
    }

    /**
     * Get brewarchive
     *
     * @return string 
     */
    public function getBrewarchive()
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
     * @return array
     */
    public function getHops()
    {
        $hops = array();
        for ($i=1; $i<=15; $i++)
        {
            $property = "brewhops$i";
            if (!is_null($this->{$property})) {
                $hops[] = array('Name'      => $this->{$property}, 
                                'Form'      => $this->{$property . 'form'},
                                'AlphaAcid' => $this->{$property . 'ibu'},
                                'Time'      => $this->{$property . 'time'},
                                'Purpose'   => $this->{$property . 'type'},
                                'Use'       => $this->{$property . 'use'},
                                'Weight'    => $this->{$property . 'weight'},
                                'AAU'       => $this->{$property . 'weight'} * $this->{$property . 'ibu'},
                               );
            }
        }
        return $hops;
    }
    
    /**
     * For displaying the total
     * 
     * @todo Refactor into some sort of Hop container object
     * @return array
     */
    public function getTotalHops()
    {
        $total = array("Weight" => 0, "AAU" => 0);
        $hops = $this->getHops();
        foreach ($hops as $hop) {
            $total['Weight'] += $hop['Weight'];
            $total['AAU']    += $hop['AAU'];
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
}
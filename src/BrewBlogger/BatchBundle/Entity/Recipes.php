<?php

namespace BrewBlogger\BatchBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Recipes
 *
 * @ORM\Table(name="recipes")
 * @ORM\Entity
 */
class Recipes
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
     * @ORM\Column(name="brewSource", type="string", length=200, nullable=true)
     */
    private $brewsource;

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
     * @ORM\Column(name="brewNotes", type="text", nullable=true)
     */
    private $brewnotes;

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
     * @ORM\Column(name="brewProcedure", type="text", nullable=true)
     */
    private $brewprocedure;

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
     * @ORM\Column(name="brewBrewerID", type="string", length=250, nullable=true)
     */
    private $brewbrewerid;

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
     * @var string
     *
     * @ORM\Column(name="brewArchive", type="string", length=8, nullable=true)
     */
    private $brewarchive;



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
     * @return Recipes
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
     * @return Recipes
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
     * Set brewsource
     *
     * @param string $brewsource
     * @return Recipes
     */
    public function setSource($brewsource)
    {
        $this->brewsource = $brewsource;
    
        return $this;
    }

    /**
     * Get brewsource
     *
     * @return string 
     */
    public function getSource()
    {
        return $this->brewsource;
    }

    /**
     * Set brewyield
     *
     * @param string $brewyield
     * @return Recipes
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
     * @return Recipes
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
     * Set brewlink1
     *
     * @param string $brewlink1
     * @return Recipes
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
     * @return Recipes
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
     * @return Recipes
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
     * @return Recipes
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
     * Set brewnotes
     *
     * @param string $brewnotes
     * @return Recipes
     */
    public function setNotes($brewnotes)
    {
        $this->brewnotes = $brewnotes;
    
        return $this;
    }

    /**
     * Get brewnotes
     *
     * @return string 
     */
    public function getNotes()
    {
        return $this->brewnotes;
    }

    /**
     * Set brewextract1
     *
     * @param string $brewextract1
     * @return Recipes
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
     * @return Recipes
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
     * @return Recipes
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
     * @return Recipes
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
     * @return Recipes
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
     * @return Recipes
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
     * @return Recipes
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
     * @return Recipes
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
     * @return Recipes
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
     * @return Recipes
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
     * @return Recipes
     */
    public function setGrain1($brewgrain1)
    {
        $this->brewgrain1 = $brewgrain1;
    
        return $this;
    }

    /**
     * Get brewgrain1
     *
     * @return string 
     */
    public function getGrain1()
    {
        return $this->brewgrain1;
    }

    /**
     * Set brewgrain1weight
     *
     * @param string $brewgrain1weight
     * @return Recipes
     */
    public function setGrain1weight($brewgrain1weight)
    {
        $this->brewgrain1weight = $brewgrain1weight;
    
        return $this;
    }

    /**
     * Get brewgrain1weight
     *
     * @return string 
     */
    public function getGrain1weight()
    {
        return $this->brewgrain1weight;
    }

    /**
     * Set brewgrain2
     *
     * @param string $brewgrain2
     * @return Recipes
     */
    public function setGrain2($brewgrain2)
    {
        $this->brewgrain2 = $brewgrain2;
    
        return $this;
    }

    /**
     * Get brewgrain2
     *
     * @return string 
     */
    public function getGrain2()
    {
        return $this->brewgrain2;
    }

    /**
     * Set brewgrain2weight
     *
     * @param string $brewgrain2weight
     * @return Recipes
     */
    public function setGrain2weight($brewgrain2weight)
    {
        $this->brewgrain2weight = $brewgrain2weight;
    
        return $this;
    }

    /**
     * Get brewgrain2weight
     *
     * @return string 
     */
    public function getGrain2weight()
    {
        return $this->brewgrain2weight;
    }

    /**
     * Set brewgrain3
     *
     * @param string $brewgrain3
     * @return Recipes
     */
    public function setGrain3($brewgrain3)
    {
        $this->brewgrain3 = $brewgrain3;
    
        return $this;
    }

    /**
     * Get brewgrain3
     *
     * @return string 
     */
    public function getGrain3()
    {
        return $this->brewgrain3;
    }

    /**
     * Set brewgrain3weight
     *
     * @param string $brewgrain3weight
     * @return Recipes
     */
    public function setGrain3weight($brewgrain3weight)
    {
        $this->brewgrain3weight = $brewgrain3weight;
    
        return $this;
    }

    /**
     * Get brewgrain3weight
     *
     * @return string 
     */
    public function getGrain3weight()
    {
        return $this->brewgrain3weight;
    }

    /**
     * Set brewgrain4
     *
     * @param string $brewgrain4
     * @return Recipes
     */
    public function setGrain4($brewgrain4)
    {
        $this->brewgrain4 = $brewgrain4;
    
        return $this;
    }

    /**
     * Get brewgrain4
     *
     * @return string 
     */
    public function getGrain4()
    {
        return $this->brewgrain4;
    }

    /**
     * Set brewgrain4weight
     *
     * @param string $brewgrain4weight
     * @return Recipes
     */
    public function setGrain4weight($brewgrain4weight)
    {
        $this->brewgrain4weight = $brewgrain4weight;
    
        return $this;
    }

    /**
     * Get brewgrain4weight
     *
     * @return string 
     */
    public function getGrain4weight()
    {
        return $this->brewgrain4weight;
    }

    /**
     * Set brewgrain5
     *
     * @param string $brewgrain5
     * @return Recipes
     */
    public function setGrain5($brewgrain5)
    {
        $this->brewgrain5 = $brewgrain5;
    
        return $this;
    }

    /**
     * Get brewgrain5
     *
     * @return string 
     */
    public function getGrain5()
    {
        return $this->brewgrain5;
    }

    /**
     * Set brewgrain5weight
     *
     * @param string $brewgrain5weight
     * @return Recipes
     */
    public function setGrain5weight($brewgrain5weight)
    {
        $this->brewgrain5weight = $brewgrain5weight;
    
        return $this;
    }

    /**
     * Get brewgrain5weight
     *
     * @return string 
     */
    public function getGrain5weight()
    {
        return $this->brewgrain5weight;
    }

    /**
     * Set brewgrain6
     *
     * @param string $brewgrain6
     * @return Recipes
     */
    public function setGrain6($brewgrain6)
    {
        $this->brewgrain6 = $brewgrain6;
    
        return $this;
    }

    /**
     * Get brewgrain6
     *
     * @return string 
     */
    public function getGrain6()
    {
        return $this->brewgrain6;
    }

    /**
     * Set brewgrain6weight
     *
     * @param string $brewgrain6weight
     * @return Recipes
     */
    public function setGrain6weight($brewgrain6weight)
    {
        $this->brewgrain6weight = $brewgrain6weight;
    
        return $this;
    }

    /**
     * Get brewgrain6weight
     *
     * @return string 
     */
    public function getGrain6weight()
    {
        return $this->brewgrain6weight;
    }

    /**
     * Set brewgrain7
     *
     * @param string $brewgrain7
     * @return Recipes
     */
    public function setGrain7($brewgrain7)
    {
        $this->brewgrain7 = $brewgrain7;
    
        return $this;
    }

    /**
     * Get brewgrain7
     *
     * @return string 
     */
    public function getGrain7()
    {
        return $this->brewgrain7;
    }

    /**
     * Set brewgrain7weight
     *
     * @param string $brewgrain7weight
     * @return Recipes
     */
    public function setGrain7weight($brewgrain7weight)
    {
        $this->brewgrain7weight = $brewgrain7weight;
    
        return $this;
    }

    /**
     * Get brewgrain7weight
     *
     * @return string 
     */
    public function getGrain7weight()
    {
        return $this->brewgrain7weight;
    }

    /**
     * Set brewgrain8
     *
     * @param string $brewgrain8
     * @return Recipes
     */
    public function setGrain8($brewgrain8)
    {
        $this->brewgrain8 = $brewgrain8;
    
        return $this;
    }

    /**
     * Get brewgrain8
     *
     * @return string 
     */
    public function getGrain8()
    {
        return $this->brewgrain8;
    }

    /**
     * Set brewgrain8weight
     *
     * @param string $brewgrain8weight
     * @return Recipes
     */
    public function setGrain8weight($brewgrain8weight)
    {
        $this->brewgrain8weight = $brewgrain8weight;
    
        return $this;
    }

    /**
     * Get brewgrain8weight
     *
     * @return string 
     */
    public function getGrain8weight()
    {
        return $this->brewgrain8weight;
    }

    /**
     * Set brewgrain9
     *
     * @param string $brewgrain9
     * @return Recipes
     */
    public function setGrain9($brewgrain9)
    {
        $this->brewgrain9 = $brewgrain9;
    
        return $this;
    }

    /**
     * Get brewgrain9
     *
     * @return string 
     */
    public function getGrain9()
    {
        return $this->brewgrain9;
    }

    /**
     * Set brewgrain9weight
     *
     * @param string $brewgrain9weight
     * @return Recipes
     */
    public function setGrain9weight($brewgrain9weight)
    {
        $this->brewgrain9weight = $brewgrain9weight;
    
        return $this;
    }

    /**
     * Get brewgrain9weight
     *
     * @return string 
     */
    public function getGrain9weight()
    {
        return $this->brewgrain9weight;
    }

    /**
     * Set brewgrain10
     *
     * @param string $brewgrain10
     * @return Recipes
     */
    public function setGrain10($brewgrain10)
    {
        $this->brewgrain10 = $brewgrain10;
    
        return $this;
    }

    /**
     * Get brewgrain10
     *
     * @return string 
     */
    public function getGrain10()
    {
        return $this->brewgrain10;
    }

    /**
     * Set brewgrain10weight
     *
     * @param string $brewgrain10weight
     * @return Recipes
     */
    public function setGrain10weight($brewgrain10weight)
    {
        $this->brewgrain10weight = $brewgrain10weight;
    
        return $this;
    }

    /**
     * Get brewgrain10weight
     *
     * @return string 
     */
    public function getGrain10weight()
    {
        return $this->brewgrain10weight;
    }

    /**
     * Set brewgrain11
     *
     * @param string $brewgrain11
     * @return Recipes
     */
    public function setGrain11($brewgrain11)
    {
        $this->brewgrain11 = $brewgrain11;
    
        return $this;
    }

    /**
     * Get brewgrain11
     *
     * @return string 
     */
    public function getGrain11()
    {
        return $this->brewgrain11;
    }

    /**
     * Set brewgrain11weight
     *
     * @param string $brewgrain11weight
     * @return Recipes
     */
    public function setGrain11weight($brewgrain11weight)
    {
        $this->brewgrain11weight = $brewgrain11weight;
    
        return $this;
    }

    /**
     * Get brewgrain11weight
     *
     * @return string 
     */
    public function getGrain11weight()
    {
        return $this->brewgrain11weight;
    }

    /**
     * Set brewgrain12
     *
     * @param string $brewgrain12
     * @return Recipes
     */
    public function setGrain12($brewgrain12)
    {
        $this->brewgrain12 = $brewgrain12;
    
        return $this;
    }

    /**
     * Get brewgrain12
     *
     * @return string 
     */
    public function getGrain12()
    {
        return $this->brewgrain12;
    }

    /**
     * Set brewgrain12weight
     *
     * @param string $brewgrain12weight
     * @return Recipes
     */
    public function setGrain12weight($brewgrain12weight)
    {
        $this->brewgrain12weight = $brewgrain12weight;
    
        return $this;
    }

    /**
     * Get brewgrain12weight
     *
     * @return string 
     */
    public function getGrain12weight()
    {
        return $this->brewgrain12weight;
    }

    /**
     * Set brewgrain13
     *
     * @param string $brewgrain13
     * @return Recipes
     */
    public function setGrain13($brewgrain13)
    {
        $this->brewgrain13 = $brewgrain13;
    
        return $this;
    }

    /**
     * Get brewgrain13
     *
     * @return string 
     */
    public function getGrain13()
    {
        return $this->brewgrain13;
    }

    /**
     * Set brewgrain13weight
     *
     * @param string $brewgrain13weight
     * @return Recipes
     */
    public function setGrain13weight($brewgrain13weight)
    {
        $this->brewgrain13weight = $brewgrain13weight;
    
        return $this;
    }

    /**
     * Get brewgrain13weight
     *
     * @return string 
     */
    public function getGrain13weight()
    {
        return $this->brewgrain13weight;
    }

    /**
     * Set brewgrain14
     *
     * @param string $brewgrain14
     * @return Recipes
     */
    public function setGrain14($brewgrain14)
    {
        $this->brewgrain14 = $brewgrain14;
    
        return $this;
    }

    /**
     * Get brewgrain14
     *
     * @return string 
     */
    public function getGrain14()
    {
        return $this->brewgrain14;
    }

    /**
     * Set brewgrain14weight
     *
     * @param string $brewgrain14weight
     * @return Recipes
     */
    public function setGrain14weight($brewgrain14weight)
    {
        $this->brewgrain14weight = $brewgrain14weight;
    
        return $this;
    }

    /**
     * Get brewgrain14weight
     *
     * @return string 
     */
    public function getGrain14weight()
    {
        return $this->brewgrain14weight;
    }

    /**
     * Set brewgrain15
     *
     * @param string $brewgrain15
     * @return Recipes
     */
    public function setGrain15($brewgrain15)
    {
        $this->brewgrain15 = $brewgrain15;
    
        return $this;
    }

    /**
     * Get brewgrain15
     *
     * @return string 
     */
    public function getGrain15()
    {
        return $this->brewgrain15;
    }

    /**
     * Set brewgrain15weight
     *
     * @param string $brewgrain15weight
     * @return Recipes
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
     * @return Recipes
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
     * @return Recipes
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
     * @return Recipes
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
     * @return Recipes
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
     * @return Recipes
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
     * @return Recipes
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
     * @return Recipes
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
     * @return Recipes
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
     * @return Recipes
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
     * @return Recipes
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
     * @return Recipes
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
     * @return Recipes
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
     * @return Recipes
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
     * @return Recipes
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
     * @return Recipes
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
     * @return Recipes
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
     * @return Recipes
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
     * @return Recipes
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
     * @return Recipes
     */
    public function setMisc1name($brewmisc1name)
    {
        $this->brewmisc1name = $brewmisc1name;
    
        return $this;
    }

    /**
     * Get brewmisc1name
     *
     * @return string 
     */
    public function getMisc1name()
    {
        return $this->brewmisc1name;
    }

    /**
     * Set brewmisc2name
     *
     * @param string $brewmisc2name
     * @return Recipes
     */
    public function setMisc2name($brewmisc2name)
    {
        $this->brewmisc2name = $brewmisc2name;
    
        return $this;
    }

    /**
     * Get brewmisc2name
     *
     * @return string 
     */
    public function getMisc2name()
    {
        return $this->brewmisc2name;
    }

    /**
     * Set brewmisc3name
     *
     * @param string $brewmisc3name
     * @return Recipes
     */
    public function setMisc3name($brewmisc3name)
    {
        $this->brewmisc3name = $brewmisc3name;
    
        return $this;
    }

    /**
     * Get brewmisc3name
     *
     * @return string 
     */
    public function getMisc3name()
    {
        return $this->brewmisc3name;
    }

    /**
     * Set brewmisc4name
     *
     * @param string $brewmisc4name
     * @return Recipes
     */
    public function setMisc4name($brewmisc4name)
    {
        $this->brewmisc4name = $brewmisc4name;
    
        return $this;
    }

    /**
     * Get brewmisc4name
     *
     * @return string 
     */
    public function getMisc4name()
    {
        return $this->brewmisc4name;
    }

    /**
     * Set brewmisc1type
     *
     * @param string $brewmisc1type
     * @return Recipes
     */
    public function setMisc1type($brewmisc1type)
    {
        $this->brewmisc1type = $brewmisc1type;
    
        return $this;
    }

    /**
     * Get brewmisc1type
     *
     * @return string 
     */
    public function getMisc1type()
    {
        return $this->brewmisc1type;
    }

    /**
     * Set brewmisc2type
     *
     * @param string $brewmisc2type
     * @return Recipes
     */
    public function setMisc2type($brewmisc2type)
    {
        $this->brewmisc2type = $brewmisc2type;
    
        return $this;
    }

    /**
     * Get brewmisc2type
     *
     * @return string 
     */
    public function getMisc2type()
    {
        return $this->brewmisc2type;
    }

    /**
     * Set brewmisc3type
     *
     * @param string $brewmisc3type
     * @return Recipes
     */
    public function setMisc3type($brewmisc3type)
    {
        $this->brewmisc3type = $brewmisc3type;
    
        return $this;
    }

    /**
     * Get brewmisc3type
     *
     * @return string 
     */
    public function getMisc3type()
    {
        return $this->brewmisc3type;
    }

    /**
     * Set brewmisc4type
     *
     * @param string $brewmisc4type
     * @return Recipes
     */
    public function setMisc4type($brewmisc4type)
    {
        $this->brewmisc4type = $brewmisc4type;
    
        return $this;
    }

    /**
     * Get brewmisc4type
     *
     * @return string 
     */
    public function getMisc4type()
    {
        return $this->brewmisc4type;
    }

    /**
     * Set brewmisc1use
     *
     * @param string $brewmisc1use
     * @return Recipes
     */
    public function setMisc1use($brewmisc1use)
    {
        $this->brewmisc1use = $brewmisc1use;
    
        return $this;
    }

    /**
     * Get brewmisc1use
     *
     * @return string 
     */
    public function getMisc1use()
    {
        return $this->brewmisc1use;
    }

    /**
     * Set brewmisc2use
     *
     * @param string $brewmisc2use
     * @return Recipes
     */
    public function setMisc2use($brewmisc2use)
    {
        $this->brewmisc2use = $brewmisc2use;
    
        return $this;
    }

    /**
     * Get brewmisc2use
     *
     * @return string 
     */
    public function getMisc2use()
    {
        return $this->brewmisc2use;
    }

    /**
     * Set brewmisc3use
     *
     * @param string $brewmisc3use
     * @return Recipes
     */
    public function setMisc3use($brewmisc3use)
    {
        $this->brewmisc3use = $brewmisc3use;
    
        return $this;
    }

    /**
     * Get brewmisc3use
     *
     * @return string 
     */
    public function getMisc3use()
    {
        return $this->brewmisc3use;
    }

    /**
     * Set brewmisc4use
     *
     * @param string $brewmisc4use
     * @return Recipes
     */
    public function setMisc4use($brewmisc4use)
    {
        $this->brewmisc4use = $brewmisc4use;
    
        return $this;
    }

    /**
     * Get brewmisc4use
     *
     * @return string 
     */
    public function getMisc4use()
    {
        return $this->brewmisc4use;
    }

    /**
     * Set brewmisc1time
     *
     * @param string $brewmisc1time
     * @return Recipes
     */
    public function setMisc1time($brewmisc1time)
    {
        $this->brewmisc1time = $brewmisc1time;
    
        return $this;
    }

    /**
     * Get brewmisc1time
     *
     * @return string 
     */
    public function getMisc1time()
    {
        return $this->brewmisc1time;
    }

    /**
     * Set brewmisc2time
     *
     * @param string $brewmisc2time
     * @return Recipes
     */
    public function setMisc2time($brewmisc2time)
    {
        $this->brewmisc2time = $brewmisc2time;
    
        return $this;
    }

    /**
     * Get brewmisc2time
     *
     * @return string 
     */
    public function getMisc2time()
    {
        return $this->brewmisc2time;
    }

    /**
     * Set brewmisc3time
     *
     * @param string $brewmisc3time
     * @return Recipes
     */
    public function setMisc3time($brewmisc3time)
    {
        $this->brewmisc3time = $brewmisc3time;
    
        return $this;
    }

    /**
     * Get brewmisc3time
     *
     * @return string 
     */
    public function getMisc3time()
    {
        return $this->brewmisc3time;
    }

    /**
     * Set brewmisc4time
     *
     * @param string $brewmisc4time
     * @return Recipes
     */
    public function setMisc4time($brewmisc4time)
    {
        $this->brewmisc4time = $brewmisc4time;
    
        return $this;
    }

    /**
     * Get brewmisc4time
     *
     * @return string 
     */
    public function getMisc4time()
    {
        return $this->brewmisc4time;
    }

    /**
     * Set brewmisc1amount
     *
     * @param string $brewmisc1amount
     * @return Recipes
     */
    public function setMisc1amount($brewmisc1amount)
    {
        $this->brewmisc1amount = $brewmisc1amount;
    
        return $this;
    }

    /**
     * Get brewmisc1amount
     *
     * @return string 
     */
    public function getMisc1amount()
    {
        return $this->brewmisc1amount;
    }

    /**
     * Set brewmisc2amount
     *
     * @param string $brewmisc2amount
     * @return Recipes
     */
    public function setMisc2amount($brewmisc2amount)
    {
        $this->brewmisc2amount = $brewmisc2amount;
    
        return $this;
    }

    /**
     * Get brewmisc2amount
     *
     * @return string 
     */
    public function getMisc2amount()
    {
        return $this->brewmisc2amount;
    }

    /**
     * Set brewmisc3amount
     *
     * @param string $brewmisc3amount
     * @return Recipes
     */
    public function setMisc3amount($brewmisc3amount)
    {
        $this->brewmisc3amount = $brewmisc3amount;
    
        return $this;
    }

    /**
     * Get brewmisc3amount
     *
     * @return string 
     */
    public function getMisc3amount()
    {
        return $this->brewmisc3amount;
    }

    /**
     * Set brewmisc4amount
     *
     * @param string $brewmisc4amount
     * @return Recipes
     */
    public function setMisc4amount($brewmisc4amount)
    {
        $this->brewmisc4amount = $brewmisc4amount;
    
        return $this;
    }

    /**
     * Get brewmisc4amount
     *
     * @return string 
     */
    public function getMisc4amount()
    {
        return $this->brewmisc4amount;
    }

    /**
     * Set brewhops1
     *
     * @param string $brewhops1
     * @return Recipes
     */
    public function setHops1($brewhops1)
    {
        $this->brewhops1 = $brewhops1;
    
        return $this;
    }

    /**
     * Get brewhops1
     *
     * @return string 
     */
    public function getHops1()
    {
        return $this->brewhops1;
    }

    /**
     * Set brewhops1weight
     *
     * @param string $brewhops1weight
     * @return Recipes
     */
    public function setHops1weight($brewhops1weight)
    {
        $this->brewhops1weight = $brewhops1weight;
    
        return $this;
    }

    /**
     * Get brewhops1weight
     *
     * @return string 
     */
    public function getHops1weight()
    {
        return $this->brewhops1weight;
    }

    /**
     * Set brewhops1ibu
     *
     * @param string $brewhops1ibu
     * @return Recipes
     */
    public function setHops1ibu($brewhops1ibu)
    {
        $this->brewhops1ibu = $brewhops1ibu;
    
        return $this;
    }

    /**
     * Get brewhops1ibu
     *
     * @return string 
     */
    public function getHops1ibu()
    {
        return $this->brewhops1ibu;
    }

    /**
     * Set brewhops1time
     *
     * @param string $brewhops1time
     * @return Recipes
     */
    public function setHops1time($brewhops1time)
    {
        $this->brewhops1time = $brewhops1time;
    
        return $this;
    }

    /**
     * Get brewhops1time
     *
     * @return string 
     */
    public function getHops1time()
    {
        return $this->brewhops1time;
    }

    /**
     * Set brewhops2
     *
     * @param string $brewhops2
     * @return Recipes
     */
    public function setHops2($brewhops2)
    {
        $this->brewhops2 = $brewhops2;
    
        return $this;
    }

    /**
     * Get brewhops2
     *
     * @return string 
     */
    public function getHops2()
    {
        return $this->brewhops2;
    }

    /**
     * Set brewhops2weight
     *
     * @param string $brewhops2weight
     * @return Recipes
     */
    public function setHops2weight($brewhops2weight)
    {
        $this->brewhops2weight = $brewhops2weight;
    
        return $this;
    }

    /**
     * Get brewhops2weight
     *
     * @return string 
     */
    public function getHops2weight()
    {
        return $this->brewhops2weight;
    }

    /**
     * Set brewhops2ibu
     *
     * @param string $brewhops2ibu
     * @return Recipes
     */
    public function setHops2ibu($brewhops2ibu)
    {
        $this->brewhops2ibu = $brewhops2ibu;
    
        return $this;
    }

    /**
     * Get brewhops2ibu
     *
     * @return string 
     */
    public function getHops2ibu()
    {
        return $this->brewhops2ibu;
    }

    /**
     * Set brewhops2time
     *
     * @param string $brewhops2time
     * @return Recipes
     */
    public function setHops2time($brewhops2time)
    {
        $this->brewhops2time = $brewhops2time;
    
        return $this;
    }

    /**
     * Get brewhops2time
     *
     * @return string 
     */
    public function getHops2time()
    {
        return $this->brewhops2time;
    }

    /**
     * Set brewhops3
     *
     * @param string $brewhops3
     * @return Recipes
     */
    public function setHops3($brewhops3)
    {
        $this->brewhops3 = $brewhops3;
    
        return $this;
    }

    /**
     * Get brewhops3
     *
     * @return string 
     */
    public function getHops3()
    {
        return $this->brewhops3;
    }

    /**
     * Set brewhops3weight
     *
     * @param string $brewhops3weight
     * @return Recipes
     */
    public function setHops3weight($brewhops3weight)
    {
        $this->brewhops3weight = $brewhops3weight;
    
        return $this;
    }

    /**
     * Get brewhops3weight
     *
     * @return string 
     */
    public function getHops3weight()
    {
        return $this->brewhops3weight;
    }

    /**
     * Set brewhops3ibu
     *
     * @param string $brewhops3ibu
     * @return Recipes
     */
    public function setHops3ibu($brewhops3ibu)
    {
        $this->brewhops3ibu = $brewhops3ibu;
    
        return $this;
    }

    /**
     * Get brewhops3ibu
     *
     * @return string 
     */
    public function getHops3ibu()
    {
        return $this->brewhops3ibu;
    }

    /**
     * Set brewhops3time
     *
     * @param string $brewhops3time
     * @return Recipes
     */
    public function setHops3time($brewhops3time)
    {
        $this->brewhops3time = $brewhops3time;
    
        return $this;
    }

    /**
     * Get brewhops3time
     *
     * @return string 
     */
    public function getHops3time()
    {
        return $this->brewhops3time;
    }

    /**
     * Set brewhops4
     *
     * @param string $brewhops4
     * @return Recipes
     */
    public function setHops4($brewhops4)
    {
        $this->brewhops4 = $brewhops4;
    
        return $this;
    }

    /**
     * Get brewhops4
     *
     * @return string 
     */
    public function getHops4()
    {
        return $this->brewhops4;
    }

    /**
     * Set brewhops4weight
     *
     * @param string $brewhops4weight
     * @return Recipes
     */
    public function setHops4weight($brewhops4weight)
    {
        $this->brewhops4weight = $brewhops4weight;
    
        return $this;
    }

    /**
     * Get brewhops4weight
     *
     * @return string 
     */
    public function getHops4weight()
    {
        return $this->brewhops4weight;
    }

    /**
     * Set brewhops4ibu
     *
     * @param string $brewhops4ibu
     * @return Recipes
     */
    public function setHops4ibu($brewhops4ibu)
    {
        $this->brewhops4ibu = $brewhops4ibu;
    
        return $this;
    }

    /**
     * Get brewhops4ibu
     *
     * @return string 
     */
    public function getHops4ibu()
    {
        return $this->brewhops4ibu;
    }

    /**
     * Set brewhops4time
     *
     * @param string $brewhops4time
     * @return Recipes
     */
    public function setHops4time($brewhops4time)
    {
        $this->brewhops4time = $brewhops4time;
    
        return $this;
    }

    /**
     * Get brewhops4time
     *
     * @return string 
     */
    public function getHops4time()
    {
        return $this->brewhops4time;
    }

    /**
     * Set brewhops5
     *
     * @param string $brewhops5
     * @return Recipes
     */
    public function setHops5($brewhops5)
    {
        $this->brewhops5 = $brewhops5;
    
        return $this;
    }

    /**
     * Get brewhops5
     *
     * @return string 
     */
    public function getHops5()
    {
        return $this->brewhops5;
    }

    /**
     * Set brewhops5weight
     *
     * @param string $brewhops5weight
     * @return Recipes
     */
    public function setHops5weight($brewhops5weight)
    {
        $this->brewhops5weight = $brewhops5weight;
    
        return $this;
    }

    /**
     * Get brewhops5weight
     *
     * @return string 
     */
    public function getHops5weight()
    {
        return $this->brewhops5weight;
    }

    /**
     * Set brewhops5ibu
     *
     * @param string $brewhops5ibu
     * @return Recipes
     */
    public function setHops5ibu($brewhops5ibu)
    {
        $this->brewhops5ibu = $brewhops5ibu;
    
        return $this;
    }

    /**
     * Get brewhops5ibu
     *
     * @return string 
     */
    public function getHops5ibu()
    {
        return $this->brewhops5ibu;
    }

    /**
     * Set brewhops5time
     *
     * @param string $brewhops5time
     * @return Recipes
     */
    public function setHops5time($brewhops5time)
    {
        $this->brewhops5time = $brewhops5time;
    
        return $this;
    }

    /**
     * Get brewhops5time
     *
     * @return string 
     */
    public function getHops5time()
    {
        return $this->brewhops5time;
    }

    /**
     * Set brewhops6
     *
     * @param string $brewhops6
     * @return Recipes
     */
    public function setHops6($brewhops6)
    {
        $this->brewhops6 = $brewhops6;
    
        return $this;
    }

    /**
     * Get brewhops6
     *
     * @return string 
     */
    public function getHops6()
    {
        return $this->brewhops6;
    }

    /**
     * Set brewhops6weight
     *
     * @param string $brewhops6weight
     * @return Recipes
     */
    public function setHops6weight($brewhops6weight)
    {
        $this->brewhops6weight = $brewhops6weight;
    
        return $this;
    }

    /**
     * Get brewhops6weight
     *
     * @return string 
     */
    public function getHops6weight()
    {
        return $this->brewhops6weight;
    }

    /**
     * Set brewhops6ibu
     *
     * @param string $brewhops6ibu
     * @return Recipes
     */
    public function setHops6ibu($brewhops6ibu)
    {
        $this->brewhops6ibu = $brewhops6ibu;
    
        return $this;
    }

    /**
     * Get brewhops6ibu
     *
     * @return string 
     */
    public function getHops6ibu()
    {
        return $this->brewhops6ibu;
    }

    /**
     * Set brewhops6time
     *
     * @param string $brewhops6time
     * @return Recipes
     */
    public function setHops6time($brewhops6time)
    {
        $this->brewhops6time = $brewhops6time;
    
        return $this;
    }

    /**
     * Get brewhops6time
     *
     * @return string 
     */
    public function getHops6time()
    {
        return $this->brewhops6time;
    }

    /**
     * Set brewhops7
     *
     * @param string $brewhops7
     * @return Recipes
     */
    public function setHops7($brewhops7)
    {
        $this->brewhops7 = $brewhops7;
    
        return $this;
    }

    /**
     * Get brewhops7
     *
     * @return string 
     */
    public function getHops7()
    {
        return $this->brewhops7;
    }

    /**
     * Set brewhops7weight
     *
     * @param string $brewhops7weight
     * @return Recipes
     */
    public function setHops7weight($brewhops7weight)
    {
        $this->brewhops7weight = $brewhops7weight;
    
        return $this;
    }

    /**
     * Get brewhops7weight
     *
     * @return string 
     */
    public function getHops7weight()
    {
        return $this->brewhops7weight;
    }

    /**
     * Set brewhops7ibu
     *
     * @param string $brewhops7ibu
     * @return Recipes
     */
    public function setHops7ibu($brewhops7ibu)
    {
        $this->brewhops7ibu = $brewhops7ibu;
    
        return $this;
    }

    /**
     * Get brewhops7ibu
     *
     * @return string 
     */
    public function getHops7ibu()
    {
        return $this->brewhops7ibu;
    }

    /**
     * Set brewhops7time
     *
     * @param string $brewhops7time
     * @return Recipes
     */
    public function setHops7time($brewhops7time)
    {
        $this->brewhops7time = $brewhops7time;
    
        return $this;
    }

    /**
     * Get brewhops7time
     *
     * @return string 
     */
    public function getHops7time()
    {
        return $this->brewhops7time;
    }

    /**
     * Set brewhops8
     *
     * @param string $brewhops8
     * @return Recipes
     */
    public function setHops8($brewhops8)
    {
        $this->brewhops8 = $brewhops8;
    
        return $this;
    }

    /**
     * Get brewhops8
     *
     * @return string 
     */
    public function getHops8()
    {
        return $this->brewhops8;
    }

    /**
     * Set brewhops8weight
     *
     * @param string $brewhops8weight
     * @return Recipes
     */
    public function setHops8weight($brewhops8weight)
    {
        $this->brewhops8weight = $brewhops8weight;
    
        return $this;
    }

    /**
     * Get brewhops8weight
     *
     * @return string 
     */
    public function getHops8weight()
    {
        return $this->brewhops8weight;
    }

    /**
     * Set brewhops8ibu
     *
     * @param string $brewhops8ibu
     * @return Recipes
     */
    public function setHops8ibu($brewhops8ibu)
    {
        $this->brewhops8ibu = $brewhops8ibu;
    
        return $this;
    }

    /**
     * Get brewhops8ibu
     *
     * @return string 
     */
    public function getHops8ibu()
    {
        return $this->brewhops8ibu;
    }

    /**
     * Set brewhops8time
     *
     * @param string $brewhops8time
     * @return Recipes
     */
    public function setHops8time($brewhops8time)
    {
        $this->brewhops8time = $brewhops8time;
    
        return $this;
    }

    /**
     * Get brewhops8time
     *
     * @return string 
     */
    public function getHops8time()
    {
        return $this->brewhops8time;
    }

    /**
     * Set brewhops9
     *
     * @param string $brewhops9
     * @return Recipes
     */
    public function setHops9($brewhops9)
    {
        $this->brewhops9 = $brewhops9;
    
        return $this;
    }

    /**
     * Get brewhops9
     *
     * @return string 
     */
    public function getHops9()
    {
        return $this->brewhops9;
    }

    /**
     * Set brewhops9weight
     *
     * @param string $brewhops9weight
     * @return Recipes
     */
    public function setHops9weight($brewhops9weight)
    {
        $this->brewhops9weight = $brewhops9weight;
    
        return $this;
    }

    /**
     * Get brewhops9weight
     *
     * @return string 
     */
    public function getHops9weight()
    {
        return $this->brewhops9weight;
    }

    /**
     * Set brewhops9ibu
     *
     * @param string $brewhops9ibu
     * @return Recipes
     */
    public function setHops9ibu($brewhops9ibu)
    {
        $this->brewhops9ibu = $brewhops9ibu;
    
        return $this;
    }

    /**
     * Get brewhops9ibu
     *
     * @return string 
     */
    public function getHops9ibu()
    {
        return $this->brewhops9ibu;
    }

    /**
     * Set brewhops9time
     *
     * @param string $brewhops9time
     * @return Recipes
     */
    public function setHops9time($brewhops9time)
    {
        $this->brewhops9time = $brewhops9time;
    
        return $this;
    }

    /**
     * Get brewhops9time
     *
     * @return string 
     */
    public function getHops9time()
    {
        return $this->brewhops9time;
    }

    /**
     * Set brewhops1use
     *
     * @param string $brewhops1use
     * @return Recipes
     */
    public function setHops1use($brewhops1use)
    {
        $this->brewhops1use = $brewhops1use;
    
        return $this;
    }

    /**
     * Get brewhops1use
     *
     * @return string 
     */
    public function getHops1use()
    {
        return $this->brewhops1use;
    }

    /**
     * Set brewhops2use
     *
     * @param string $brewhops2use
     * @return Recipes
     */
    public function setHops2use($brewhops2use)
    {
        $this->brewhops2use = $brewhops2use;
    
        return $this;
    }

    /**
     * Get brewhops2use
     *
     * @return string 
     */
    public function getHops2use()
    {
        return $this->brewhops2use;
    }

    /**
     * Set brewhops3use
     *
     * @param string $brewhops3use
     * @return Recipes
     */
    public function setHops3use($brewhops3use)
    {
        $this->brewhops3use = $brewhops3use;
    
        return $this;
    }

    /**
     * Get brewhops3use
     *
     * @return string 
     */
    public function getHops3use()
    {
        return $this->brewhops3use;
    }

    /**
     * Set brewhops4use
     *
     * @param string $brewhops4use
     * @return Recipes
     */
    public function setHops4use($brewhops4use)
    {
        $this->brewhops4use = $brewhops4use;
    
        return $this;
    }

    /**
     * Get brewhops4use
     *
     * @return string 
     */
    public function getHops4use()
    {
        return $this->brewhops4use;
    }

    /**
     * Set brewhops5use
     *
     * @param string $brewhops5use
     * @return Recipes
     */
    public function setHops5use($brewhops5use)
    {
        $this->brewhops5use = $brewhops5use;
    
        return $this;
    }

    /**
     * Get brewhops5use
     *
     * @return string 
     */
    public function getHops5use()
    {
        return $this->brewhops5use;
    }

    /**
     * Set brewhops6use
     *
     * @param string $brewhops6use
     * @return Recipes
     */
    public function setHops6use($brewhops6use)
    {
        $this->brewhops6use = $brewhops6use;
    
        return $this;
    }

    /**
     * Get brewhops6use
     *
     * @return string 
     */
    public function getHops6use()
    {
        return $this->brewhops6use;
    }

    /**
     * Set brewhops7use
     *
     * @param string $brewhops7use
     * @return Recipes
     */
    public function setHops7use($brewhops7use)
    {
        $this->brewhops7use = $brewhops7use;
    
        return $this;
    }

    /**
     * Get brewhops7use
     *
     * @return string 
     */
    public function getHops7use()
    {
        return $this->brewhops7use;
    }

    /**
     * Set brewhops8use
     *
     * @param string $brewhops8use
     * @return Recipes
     */
    public function setHops8use($brewhops8use)
    {
        $this->brewhops8use = $brewhops8use;
    
        return $this;
    }

    /**
     * Get brewhops8use
     *
     * @return string 
     */
    public function getHops8use()
    {
        return $this->brewhops8use;
    }

    /**
     * Set brewhops9use
     *
     * @param string $brewhops9use
     * @return Recipes
     */
    public function setHops9use($brewhops9use)
    {
        $this->brewhops9use = $brewhops9use;
    
        return $this;
    }

    /**
     * Get brewhops9use
     *
     * @return string 
     */
    public function getHops9use()
    {
        return $this->brewhops9use;
    }

    /**
     * Set brewhops1type
     *
     * @param string $brewhops1type
     * @return Recipes
     */
    public function setHops1type($brewhops1type)
    {
        $this->brewhops1type = $brewhops1type;
    
        return $this;
    }

    /**
     * Get brewhops1type
     *
     * @return string 
     */
    public function getHops1type()
    {
        return $this->brewhops1type;
    }

    /**
     * Set brewhops2type
     *
     * @param string $brewhops2type
     * @return Recipes
     */
    public function setHops2type($brewhops2type)
    {
        $this->brewhops2type = $brewhops2type;
    
        return $this;
    }

    /**
     * Get brewhops2type
     *
     * @return string 
     */
    public function getHops2type()
    {
        return $this->brewhops2type;
    }

    /**
     * Set brewhops3type
     *
     * @param string $brewhops3type
     * @return Recipes
     */
    public function setHops3type($brewhops3type)
    {
        $this->brewhops3type = $brewhops3type;
    
        return $this;
    }

    /**
     * Get brewhops3type
     *
     * @return string 
     */
    public function getHops3type()
    {
        return $this->brewhops3type;
    }

    /**
     * Set brewhops4type
     *
     * @param string $brewhops4type
     * @return Recipes
     */
    public function setHops4type($brewhops4type)
    {
        $this->brewhops4type = $brewhops4type;
    
        return $this;
    }

    /**
     * Get brewhops4type
     *
     * @return string 
     */
    public function getHops4type()
    {
        return $this->brewhops4type;
    }

    /**
     * Set brewhops5type
     *
     * @param string $brewhops5type
     * @return Recipes
     */
    public function setHops5type($brewhops5type)
    {
        $this->brewhops5type = $brewhops5type;
    
        return $this;
    }

    /**
     * Get brewhops5type
     *
     * @return string 
     */
    public function getHops5type()
    {
        return $this->brewhops5type;
    }

    /**
     * Set brewhops6type
     *
     * @param string $brewhops6type
     * @return Recipes
     */
    public function setHops6type($brewhops6type)
    {
        $this->brewhops6type = $brewhops6type;
    
        return $this;
    }

    /**
     * Get brewhops6type
     *
     * @return string 
     */
    public function getHops6type()
    {
        return $this->brewhops6type;
    }

    /**
     * Set brewhops7type
     *
     * @param string $brewhops7type
     * @return Recipes
     */
    public function setHops7type($brewhops7type)
    {
        $this->brewhops7type = $brewhops7type;
    
        return $this;
    }

    /**
     * Get brewhops7type
     *
     * @return string 
     */
    public function getHops7type()
    {
        return $this->brewhops7type;
    }

    /**
     * Set brewhops8type
     *
     * @param string $brewhops8type
     * @return Recipes
     */
    public function setHops8type($brewhops8type)
    {
        $this->brewhops8type = $brewhops8type;
    
        return $this;
    }

    /**
     * Get brewhops8type
     *
     * @return string 
     */
    public function getHops8type()
    {
        return $this->brewhops8type;
    }

    /**
     * Set brewhops9type
     *
     * @param string $brewhops9type
     * @return Recipes
     */
    public function setHops9type($brewhops9type)
    {
        $this->brewhops9type = $brewhops9type;
    
        return $this;
    }

    /**
     * Get brewhops9type
     *
     * @return string 
     */
    public function getHops9type()
    {
        return $this->brewhops9type;
    }

    /**
     * Set brewhops1form
     *
     * @param string $brewhops1form
     * @return Recipes
     */
    public function setHops1form($brewhops1form)
    {
        $this->brewhops1form = $brewhops1form;
    
        return $this;
    }

    /**
     * Get brewhops1form
     *
     * @return string 
     */
    public function getHops1form()
    {
        return $this->brewhops1form;
    }

    /**
     * Set brewhops2form
     *
     * @param string $brewhops2form
     * @return Recipes
     */
    public function setHops2form($brewhops2form)
    {
        $this->brewhops2form = $brewhops2form;
    
        return $this;
    }

    /**
     * Get brewhops2form
     *
     * @return string 
     */
    public function getHops2form()
    {
        return $this->brewhops2form;
    }

    /**
     * Set brewhops3form
     *
     * @param string $brewhops3form
     * @return Recipes
     */
    public function setHops3form($brewhops3form)
    {
        $this->brewhops3form = $brewhops3form;
    
        return $this;
    }

    /**
     * Get brewhops3form
     *
     * @return string 
     */
    public function getHops3form()
    {
        return $this->brewhops3form;
    }

    /**
     * Set brewhops4form
     *
     * @param string $brewhops4form
     * @return Recipes
     */
    public function setHops4form($brewhops4form)
    {
        $this->brewhops4form = $brewhops4form;
    
        return $this;
    }

    /**
     * Get brewhops4form
     *
     * @return string 
     */
    public function getHops4form()
    {
        return $this->brewhops4form;
    }

    /**
     * Set brewhops5form
     *
     * @param string $brewhops5form
     * @return Recipes
     */
    public function setHops5form($brewhops5form)
    {
        $this->brewhops5form = $brewhops5form;
    
        return $this;
    }

    /**
     * Get brewhops5form
     *
     * @return string 
     */
    public function getHops5form()
    {
        return $this->brewhops5form;
    }

    /**
     * Set brewhops6form
     *
     * @param string $brewhops6form
     * @return Recipes
     */
    public function setHops6form($brewhops6form)
    {
        $this->brewhops6form = $brewhops6form;
    
        return $this;
    }

    /**
     * Get brewhops6form
     *
     * @return string 
     */
    public function getHops6form()
    {
        return $this->brewhops6form;
    }

    /**
     * Set brewhops7form
     *
     * @param string $brewhops7form
     * @return Recipes
     */
    public function setHops7form($brewhops7form)
    {
        $this->brewhops7form = $brewhops7form;
    
        return $this;
    }

    /**
     * Get brewhops7form
     *
     * @return string 
     */
    public function getHops7form()
    {
        return $this->brewhops7form;
    }

    /**
     * Set brewhops8form
     *
     * @param string $brewhops8form
     * @return Recipes
     */
    public function setHops8form($brewhops8form)
    {
        $this->brewhops8form = $brewhops8form;
    
        return $this;
    }

    /**
     * Get brewhops8form
     *
     * @return string 
     */
    public function getHops8form()
    {
        return $this->brewhops8form;
    }

    /**
     * Set brewhops9form
     *
     * @param string $brewhops9form
     * @return Recipes
     */
    public function setHops9form($brewhops9form)
    {
        $this->brewhops9form = $brewhops9form;
    
        return $this;
    }

    /**
     * Get brewhops9form
     *
     * @return string 
     */
    public function getHops9form()
    {
        return $this->brewhops9form;
    }

    /**
     * Set brewhops10
     *
     * @param string $brewhops10
     * @return Recipes
     */
    public function setHops10($brewhops10)
    {
        $this->brewhops10 = $brewhops10;
    
        return $this;
    }

    /**
     * Get brewhops10
     *
     * @return string 
     */
    public function getHops10()
    {
        return $this->brewhops10;
    }

    /**
     * Set brewhops10weight
     *
     * @param string $brewhops10weight
     * @return Recipes
     */
    public function setHops10weight($brewhops10weight)
    {
        $this->brewhops10weight = $brewhops10weight;
    
        return $this;
    }

    /**
     * Get brewhops10weight
     *
     * @return string 
     */
    public function getHops10weight()
    {
        return $this->brewhops10weight;
    }

    /**
     * Set brewhops10ibu
     *
     * @param string $brewhops10ibu
     * @return Recipes
     */
    public function setHops10ibu($brewhops10ibu)
    {
        $this->brewhops10ibu = $brewhops10ibu;
    
        return $this;
    }

    /**
     * Get brewhops10ibu
     *
     * @return string 
     */
    public function getHops10ibu()
    {
        return $this->brewhops10ibu;
    }

    /**
     * Set brewhops10time
     *
     * @param string $brewhops10time
     * @return Recipes
     */
    public function setHops10time($brewhops10time)
    {
        $this->brewhops10time = $brewhops10time;
    
        return $this;
    }

    /**
     * Get brewhops10time
     *
     * @return string 
     */
    public function getHops10time()
    {
        return $this->brewhops10time;
    }

    /**
     * Set brewhops10use
     *
     * @param string $brewhops10use
     * @return Recipes
     */
    public function setHops10use($brewhops10use)
    {
        $this->brewhops10use = $brewhops10use;
    
        return $this;
    }

    /**
     * Get brewhops10use
     *
     * @return string 
     */
    public function getHops10use()
    {
        return $this->brewhops10use;
    }

    /**
     * Set brewhops10type
     *
     * @param string $brewhops10type
     * @return Recipes
     */
    public function setHops10type($brewhops10type)
    {
        $this->brewhops10type = $brewhops10type;
    
        return $this;
    }

    /**
     * Get brewhops10type
     *
     * @return string 
     */
    public function getHops10type()
    {
        return $this->brewhops10type;
    }

    /**
     * Set brewhops10form
     *
     * @param string $brewhops10form
     * @return Recipes
     */
    public function setHops10form($brewhops10form)
    {
        $this->brewhops10form = $brewhops10form;
    
        return $this;
    }

    /**
     * Get brewhops10form
     *
     * @return string 
     */
    public function getHops10form()
    {
        return $this->brewhops10form;
    }

    /**
     * Set brewhops11
     *
     * @param string $brewhops11
     * @return Recipes
     */
    public function setHops11($brewhops11)
    {
        $this->brewhops11 = $brewhops11;
    
        return $this;
    }

    /**
     * Get brewhops11
     *
     * @return string 
     */
    public function getHops11()
    {
        return $this->brewhops11;
    }

    /**
     * Set brewhops11weight
     *
     * @param string $brewhops11weight
     * @return Recipes
     */
    public function setHops11weight($brewhops11weight)
    {
        $this->brewhops11weight = $brewhops11weight;
    
        return $this;
    }

    /**
     * Get brewhops11weight
     *
     * @return string 
     */
    public function getHops11weight()
    {
        return $this->brewhops11weight;
    }

    /**
     * Set brewhops11ibu
     *
     * @param string $brewhops11ibu
     * @return Recipes
     */
    public function setHops11ibu($brewhops11ibu)
    {
        $this->brewhops11ibu = $brewhops11ibu;
    
        return $this;
    }

    /**
     * Get brewhops11ibu
     *
     * @return string 
     */
    public function getHops11ibu()
    {
        return $this->brewhops11ibu;
    }

    /**
     * Set brewhops11time
     *
     * @param string $brewhops11time
     * @return Recipes
     */
    public function setHops11time($brewhops11time)
    {
        $this->brewhops11time = $brewhops11time;
    
        return $this;
    }

    /**
     * Get brewhops11time
     *
     * @return string 
     */
    public function getHops11time()
    {
        return $this->brewhops11time;
    }

    /**
     * Set brewhops11use
     *
     * @param string $brewhops11use
     * @return Recipes
     */
    public function setHops11use($brewhops11use)
    {
        $this->brewhops11use = $brewhops11use;
    
        return $this;
    }

    /**
     * Get brewhops11use
     *
     * @return string 
     */
    public function getHops11use()
    {
        return $this->brewhops11use;
    }

    /**
     * Set brewhops11type
     *
     * @param string $brewhops11type
     * @return Recipes
     */
    public function setHops11type($brewhops11type)
    {
        $this->brewhops11type = $brewhops11type;
    
        return $this;
    }

    /**
     * Get brewhops11type
     *
     * @return string 
     */
    public function getHops11type()
    {
        return $this->brewhops11type;
    }

    /**
     * Set brewhops11form
     *
     * @param string $brewhops11form
     * @return Recipes
     */
    public function setHops11form($brewhops11form)
    {
        $this->brewhops11form = $brewhops11form;
    
        return $this;
    }

    /**
     * Get brewhops11form
     *
     * @return string 
     */
    public function getHops11form()
    {
        return $this->brewhops11form;
    }

    /**
     * Set brewhops12
     *
     * @param string $brewhops12
     * @return Recipes
     */
    public function setHops12($brewhops12)
    {
        $this->brewhops12 = $brewhops12;
    
        return $this;
    }

    /**
     * Get brewhops12
     *
     * @return string 
     */
    public function getHops12()
    {
        return $this->brewhops12;
    }

    /**
     * Set brewhops12weight
     *
     * @param string $brewhops12weight
     * @return Recipes
     */
    public function setHops12weight($brewhops12weight)
    {
        $this->brewhops12weight = $brewhops12weight;
    
        return $this;
    }

    /**
     * Get brewhops12weight
     *
     * @return string 
     */
    public function getHops12weight()
    {
        return $this->brewhops12weight;
    }

    /**
     * Set brewhops12ibu
     *
     * @param string $brewhops12ibu
     * @return Recipes
     */
    public function setHops12ibu($brewhops12ibu)
    {
        $this->brewhops12ibu = $brewhops12ibu;
    
        return $this;
    }

    /**
     * Get brewhops12ibu
     *
     * @return string 
     */
    public function getHops12ibu()
    {
        return $this->brewhops12ibu;
    }

    /**
     * Set brewhops12time
     *
     * @param string $brewhops12time
     * @return Recipes
     */
    public function setHops12time($brewhops12time)
    {
        $this->brewhops12time = $brewhops12time;
    
        return $this;
    }

    /**
     * Get brewhops12time
     *
     * @return string 
     */
    public function getHops12time()
    {
        return $this->brewhops12time;
    }

    /**
     * Set brewhops12use
     *
     * @param string $brewhops12use
     * @return Recipes
     */
    public function setHops12use($brewhops12use)
    {
        $this->brewhops12use = $brewhops12use;
    
        return $this;
    }

    /**
     * Get brewhops12use
     *
     * @return string 
     */
    public function getHops12use()
    {
        return $this->brewhops12use;
    }

    /**
     * Set brewhops12type
     *
     * @param string $brewhops12type
     * @return Recipes
     */
    public function setHops12type($brewhops12type)
    {
        $this->brewhops12type = $brewhops12type;
    
        return $this;
    }

    /**
     * Get brewhops12type
     *
     * @return string 
     */
    public function getHops12type()
    {
        return $this->brewhops12type;
    }

    /**
     * Set brewhops12form
     *
     * @param string $brewhops12form
     * @return Recipes
     */
    public function setHops12form($brewhops12form)
    {
        $this->brewhops12form = $brewhops12form;
    
        return $this;
    }

    /**
     * Get brewhops12form
     *
     * @return string 
     */
    public function getHops12form()
    {
        return $this->brewhops12form;
    }

    /**
     * Set brewhops13
     *
     * @param string $brewhops13
     * @return Recipes
     */
    public function setHops13($brewhops13)
    {
        $this->brewhops13 = $brewhops13;
    
        return $this;
    }

    /**
     * Get brewhops13
     *
     * @return string 
     */
    public function getHops13()
    {
        return $this->brewhops13;
    }

    /**
     * Set brewhops13weight
     *
     * @param string $brewhops13weight
     * @return Recipes
     */
    public function setHops13weight($brewhops13weight)
    {
        $this->brewhops13weight = $brewhops13weight;
    
        return $this;
    }

    /**
     * Get brewhops13weight
     *
     * @return string 
     */
    public function getHops13weight()
    {
        return $this->brewhops13weight;
    }

    /**
     * Set brewhops13ibu
     *
     * @param string $brewhops13ibu
     * @return Recipes
     */
    public function setHops13ibu($brewhops13ibu)
    {
        $this->brewhops13ibu = $brewhops13ibu;
    
        return $this;
    }

    /**
     * Get brewhops13ibu
     *
     * @return string 
     */
    public function getHops13ibu()
    {
        return $this->brewhops13ibu;
    }

    /**
     * Set brewhops13time
     *
     * @param string $brewhops13time
     * @return Recipes
     */
    public function setHops13time($brewhops13time)
    {
        $this->brewhops13time = $brewhops13time;
    
        return $this;
    }

    /**
     * Get brewhops13time
     *
     * @return string 
     */
    public function getHops13time()
    {
        return $this->brewhops13time;
    }

    /**
     * Set brewhops13use
     *
     * @param string $brewhops13use
     * @return Recipes
     */
    public function setHops13use($brewhops13use)
    {
        $this->brewhops13use = $brewhops13use;
    
        return $this;
    }

    /**
     * Get brewhops13use
     *
     * @return string 
     */
    public function getHops13use()
    {
        return $this->brewhops13use;
    }

    /**
     * Set brewhops13type
     *
     * @param string $brewhops13type
     * @return Recipes
     */
    public function setHops13type($brewhops13type)
    {
        $this->brewhops13type = $brewhops13type;
    
        return $this;
    }

    /**
     * Get brewhops13type
     *
     * @return string 
     */
    public function getHops13type()
    {
        return $this->brewhops13type;
    }

    /**
     * Set brewhops13form
     *
     * @param string $brewhops13form
     * @return Recipes
     */
    public function setHops13form($brewhops13form)
    {
        $this->brewhops13form = $brewhops13form;
    
        return $this;
    }

    /**
     * Get brewhops13form
     *
     * @return string 
     */
    public function getHops13form()
    {
        return $this->brewhops13form;
    }

    /**
     * Set brewhops14
     *
     * @param string $brewhops14
     * @return Recipes
     */
    public function setHops14($brewhops14)
    {
        $this->brewhops14 = $brewhops14;
    
        return $this;
    }

    /**
     * Get brewhops14
     *
     * @return string 
     */
    public function getHops14()
    {
        return $this->brewhops14;
    }

    /**
     * Set brewhops14weight
     *
     * @param string $brewhops14weight
     * @return Recipes
     */
    public function setHops14weight($brewhops14weight)
    {
        $this->brewhops14weight = $brewhops14weight;
    
        return $this;
    }

    /**
     * Get brewhops14weight
     *
     * @return string 
     */
    public function getHops14weight()
    {
        return $this->brewhops14weight;
    }

    /**
     * Set brewhops14ibu
     *
     * @param string $brewhops14ibu
     * @return Recipes
     */
    public function setHops14ibu($brewhops14ibu)
    {
        $this->brewhops14ibu = $brewhops14ibu;
    
        return $this;
    }

    /**
     * Get brewhops14ibu
     *
     * @return string 
     */
    public function getHops14ibu()
    {
        return $this->brewhops14ibu;
    }

    /**
     * Set brewhops14time
     *
     * @param string $brewhops14time
     * @return Recipes
     */
    public function setHops14time($brewhops14time)
    {
        $this->brewhops14time = $brewhops14time;
    
        return $this;
    }

    /**
     * Get brewhops14time
     *
     * @return string 
     */
    public function getHops14time()
    {
        return $this->brewhops14time;
    }

    /**
     * Set brewhops14use
     *
     * @param string $brewhops14use
     * @return Recipes
     */
    public function setHops14use($brewhops14use)
    {
        $this->brewhops14use = $brewhops14use;
    
        return $this;
    }

    /**
     * Get brewhops14use
     *
     * @return string 
     */
    public function getHops14use()
    {
        return $this->brewhops14use;
    }

    /**
     * Set brewhops14type
     *
     * @param string $brewhops14type
     * @return Recipes
     */
    public function setHops14type($brewhops14type)
    {
        $this->brewhops14type = $brewhops14type;
    
        return $this;
    }

    /**
     * Get brewhops14type
     *
     * @return string 
     */
    public function getHops14type()
    {
        return $this->brewhops14type;
    }

    /**
     * Set brewhops14form
     *
     * @param string $brewhops14form
     * @return Recipes
     */
    public function setHops14form($brewhops14form)
    {
        $this->brewhops14form = $brewhops14form;
    
        return $this;
    }

    /**
     * Get brewhops14form
     *
     * @return string 
     */
    public function getHops14form()
    {
        return $this->brewhops14form;
    }

    /**
     * Set brewhops15
     *
     * @param string $brewhops15
     * @return Recipes
     */
    public function setHops15($brewhops15)
    {
        $this->brewhops15 = $brewhops15;
    
        return $this;
    }

    /**
     * Get brewhops15
     *
     * @return string 
     */
    public function getHops15()
    {
        return $this->brewhops15;
    }

    /**
     * Set brewhops15weight
     *
     * @param string $brewhops15weight
     * @return Recipes
     */
    public function setHops15weight($brewhops15weight)
    {
        $this->brewhops15weight = $brewhops15weight;
    
        return $this;
    }

    /**
     * Get brewhops15weight
     *
     * @return string 
     */
    public function getHops15weight()
    {
        return $this->brewhops15weight;
    }

    /**
     * Set brewhops15ibu
     *
     * @param string $brewhops15ibu
     * @return Recipes
     */
    public function setHops15ibu($brewhops15ibu)
    {
        $this->brewhops15ibu = $brewhops15ibu;
    
        return $this;
    }

    /**
     * Get brewhops15ibu
     *
     * @return string 
     */
    public function getHops15ibu()
    {
        return $this->brewhops15ibu;
    }

    /**
     * Set brewhops15time
     *
     * @param string $brewhops15time
     * @return Recipes
     */
    public function setHops15time($brewhops15time)
    {
        $this->brewhops15time = $brewhops15time;
    
        return $this;
    }

    /**
     * Get brewhops15time
     *
     * @return string 
     */
    public function getHops15time()
    {
        return $this->brewhops15time;
    }

    /**
     * Set brewhops15use
     *
     * @param string $brewhops15use
     * @return Recipes
     */
    public function setHops15use($brewhops15use)
    {
        $this->brewhops15use = $brewhops15use;
    
        return $this;
    }

    /**
     * Get brewhops15use
     *
     * @return string 
     */
    public function getHops15use()
    {
        return $this->brewhops15use;
    }

    /**
     * Set brewhops15type
     *
     * @param string $brewhops15type
     * @return Recipes
     */
    public function setHops15type($brewhops15type)
    {
        $this->brewhops15type = $brewhops15type;
    
        return $this;
    }

    /**
     * Get brewhops15type
     *
     * @return string 
     */
    public function getHops15type()
    {
        return $this->brewhops15type;
    }

    /**
     * Set brewhops15form
     *
     * @param string $brewhops15form
     * @return Recipes
     */
    public function setHops15form($brewhops15form)
    {
        $this->brewhops15form = $brewhops15form;
    
        return $this;
    }

    /**
     * Get brewhops15form
     *
     * @return string 
     */
    public function getHops15form()
    {
        return $this->brewhops15form;
    }

    /**
     * Set brewyeast
     *
     * @param string $brewyeast
     * @return Recipes
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
     * @return Recipes
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
     * @return Recipes
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
     * @return Recipes
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
     * @return Recipes
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
     * @return Recipes
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
     * @return Recipes
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
     * @return Recipes
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
     * Set brewprocedure
     *
     * @param string $brewprocedure
     * @return Recipes
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
     * Set brewprimary
     *
     * @param string $brewprimary
     * @return Recipes
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
     * @return Recipes
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
     * @return Recipes
     */
    public function setBrewsecondaryDays($brewsecondary)
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
     * @return Recipes
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
     * @return Recipes
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
     * @return Recipes
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
     * @return Recipes
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
     * @return Recipes
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
     * @return Recipes
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
     * @return Recipes
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
     * @return Recipes
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
     * @return Recipes
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
     * @return Recipes
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
     * @return Recipes
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
     * Set brewbrewerid
     *
     * @param string $brewbrewerid
     * @return Recipes
     */
    public function setBrewerID($brewbrewerid)
    {
        $this->brewbrewerid = $brewbrewerid;
    
        return $this;
    }

    /**
     * Get brewbrewerid
     *
     * @return string 
     */
    public function getBrewerID()
    {
        return $this->brewbrewerid;
    }

    /**
     * Set brewboiltime
     *
     * @param integer $brewboiltime
     * @return Recipes
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
     * @return Recipes
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
     * Set brewmashprofile
     *
     * @param integer $brewmashprofile
     * @return Recipes
     */
    public function setMashProfile($brewmashprofile)
    {
        $this->brewmashprofile = $brewmashprofile;
    
        return $this;
    }

    /**
     * Get brewmashprofile
     *
     * @return integer 
     */
    public function getMashProfile()
    {
        return $this->brewmashprofile;
    }

    /**
     * Set brewwaterprofile
     *
     * @param integer $brewwaterprofile
     * @return Recipes
     */
    public function setWaterProfile($brewwaterprofile)
    {
        $this->brewwaterprofile = $brewwaterprofile;
    
        return $this;
    }

    /**
     * Get brewwaterprofile
     *
     * @return integer 
     */
    public function getWaterProfile()
    {
        return $this->brewwaterprofile;
    }

    /**
     * Set brewyeastprofile
     *
     * @param integer $brewyeastprofile
     * @return Recipes
     */
    public function setYeastProfile($brewyeastprofile)
    {
        $this->brewyeastprofile = $brewyeastprofile;
    
        return $this;
    }

    /**
     * Get brewyeastprofile
     *
     * @return integer 
     */
    public function getYeastProfile()
    {
        return $this->brewyeastprofile;
    }

    /**
     * Set brewarchive
     *
     * @param string $brewarchive
     * @return Recipes
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
}
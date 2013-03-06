<?php

namespace BrewBlogger\BatchBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class BrewingType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
            $builder->add('name', 'text', array(
                'attr' => array('class' => 'span3'),
            ));
            
            $builder->add('batchnum', 'text', array(
                'label' => 'Batch No',
            ));
            
            $builder->add('featured', 'choice', array(
                'choices'  => array('Y' => 'Yes', 'N' => 'No'),
                'expanded' => TRUE,
                'attr'     => array('help_block'  => 'Selecting "Yes" will place this log into the "Featured" list at the top of the BrewBlogs list display.'),
            ));
            
            $builder->add('archive', 'choice', array(
                'choices'  => array('Yes' => 'Yes', 'No' => 'No'),
                'expanded' => TRUE,
                'attr'     => array('help_block'  => 'Selecting "Yes" will place this log into your archive list. It will not be displayed on the "public" areas of the site.'),
            ));
            
            $builder->add('style');
            // Needs a db change to normalize style against the table before we can use this
            // $builder->add('style', 'entity', array(
            //     'class'    => 'BrewBloggerBatchBundle:Styles',
            // ));

            $builder->add('yield');
            
            $builder->add('method', 'choice', array(
                'choices' => array(
                    'Extract'      => 'Extract',
                    'Partial Mash' => 'Partial Mash',
                    'All Grain'    => 'All Grain', 
                    'Other'        => 'Other'),
            ));
            
            $builder->add('condition', 'choice', array(
                'empty_value' => '',
                'choices'     => array(
                    'Bottles'               => 'Bottles',
                    'Keg'                   => 'Keg',
                    'Cask'                  => 'Cask',
                    'Bottles and Keg'       => 'Bottles and Keg',
                    'Bottles and Cask'      => 'Bottles and Cask',
                    'Keg and Cask'          => 'Keg and Cask',
                    'Bottles, Keg and Cask' => 'Bottles, Keg and Cask',
                    
                )
            ));
            
            $builder->add('date', 'date', array(
                'label' => 'Brew Date',
            ));
            
            $builder->add('cost');
            
            $builder->add('status', 'choice', array(
                'choices' => array(
                    'Planned'      => 'Planned',
                    'Primary'      => 'Primary',
                    'Secondary'    => 'Secondary',
                    'Tertiary'     => 'Tertiary',
                    'Lagering'     => 'Lagering',
                    'Conditioning' => 'Conditioning',
                    'On Tap'       => 'On Tap',
                    'Bottled'      => 'Bottled',
                    'Gone'         => 'Gone',
                )
            ));
            
            $builder->add('tapdate', 'date', array(
                'label' => 'Tap Date',
            ));
            
            $builder->add('info', 'textarea', array(
                'required' => false,
            ));
            
            $builder->add('comments', 'textarea', array(
                'required' => false,
            ));
            
            $builder->add('extracts', 'collection', array(
                'type'         => new ExtractAdditionType(),
                'allow_add'    => TRUE,
                'allow_delete' => TRUE,
                'prototype'    => TRUE,));

            $builder->add('grains', 'collection', array(
                'type'         => new GrainAdditionType(),
                'allow_add'    => TRUE,
                'allow_delete' => TRUE,
                'prototype'    => TRUE,));

            $builder->add('adjuncts', 'collection', array(
                'type' => new AdjunctAdditionType(),
                'allow_add'    => TRUE,
                'allow_delete' => TRUE,
                'prototype'    => TRUE,
            ));

            $builder->add('MiscIngredients', 'collection', array(
                'type' => new MiscAdditionType(),
                'allow_add'    => TRUE,
                'allow_delete' => TRUE,
                'prototype'    => TRUE,
            ));

            $builder->add('Hops', 'collection', array(
                'type'         => new HopAdditionType(),
                'allow_add'    => TRUE,
                'allow_delete' => TRUE,
                'prototype'    => TRUE,
            ));

            $builder->add('bitterness');
            
            $builder->add('ibuformula', 'choice', array(
                'label'   => 'IBU Formula',
                'choices' => array(
                    'Daniels' => 'Daniels',
                    'Garetz'  => 'Garetz',
                    'Rager'   => 'Rager',
                    'Tinseth' => 'Tinseth',
                )
            ));
            
            $builder->add('lovibond', 'text', array(
                'label' => 'Color',
            ));
            
            $builder->add('colorformula', 'choice', array(
                'label'   => 'Color Formula',
                'choices' => array(
                    'Morey'   => 'Morey',
                    'Daniels' => 'Daniels',
                    'Moser'   => 'Moser',
                )
            ));
            
            $builder->add('waterProfile', 'entity', array(
                'class'    => 'BrewBloggerBatchBundle:WaterProfiles',
                'property' => 'name',
                'label'    => 'Water Profile',
                'attr'     => array(
                    'class' => 'input-xlarge'
                ),
            ));
            
            $builder->add('EquipmentProfile', 'entity', array(
                'class'    => 'BrewBloggerBatchBundle:EquipProfiles',
                'property' => 'name',
                'label'    => 'Equipment Profile',
                'attr'     => array(
                    'class' => 'input-xxlarge'
                ),
            ));
            
            
            /** Mash **/
            $builder->add('mashProfile', 'entity', array(
                'class'    => 'BrewBloggerBatchBundle:MashProfiles',
                'property' => 'name',
                'label'    => 'Mash Profile',
                'attr'     => array(
                    'class' => 'input-xxlarge'
                ),                
            ));
            $builder->add('waterratio', 'number', array(
                'label' => 'Mash Thickness',
            ));
            $builder->add('preboilamt', 'number', array(
                'label' => 'Pre-boil Wort Amount',
            ));
            $builder->add('mashgravity', new GravityType(), array(
                'label' => 'Pre-boil Gravity',
            ));
            
            $builder->add('boiltime', 'number', array(
                'label' => 'Total Boil Time',
            ));
            
            $builder->add('yeastProfile', 'entity', array(
                'class'    => 'BrewBloggerBatchBundle:YeastProfiles',
                'label'    => 'Yeast Name',
                'attr'     => array(
                    'class' => 'input-xxlarge'
                ),
            ));
            $builder->add('yeastamount', 'text', array(
                'label' => 'Amount',
            ));
            
            
            /** Gravity **/
            $builder->add('og', new GravityType(), array(
                'label' => 'OG',                
            ));
            $builder->add('targetog', new GravityType(), array(
                'label' => 'Target OG',
            ));            
            $builder->add('gravity1', new GravityType(), array(
                'label' => 'Reading 1',
            ));
            $builder->add('gravity1days', 'number', array(
                'label' => 'Reading 1',
                'attr'  => array(
                    'class' => 'span1',
                    'append_input' => 'days',
                )
            ));
            $builder->add('gravity2', new GravityType(), array(
                'label' => 'Reading 2',
            ));
            $builder->add('gravity2days', 'number', array(
                'label' => 'Reading 2',
                'attr'  => array(
                    'class' => 'span1',
                    'append_input' => 'days',
                )
            ));
            $builder->add('fg', new GravityType(), array(
                'label' => 'FG',
            ));
            $builder->add('targetfg', new GravityType(), array(
                'label' => 'Target FG'
            ));
            
            
            $builder->add('procedure', 'textarea', array(
                'label'    => 'Step By Step Instructions',
                'required' => FALSE,
            ));
            
            $builder->add('specialprocedure', 'textarea', array(
                'label'    => 'Special Procedures',
                'required' => FALSE,
            ));
            
            
            
            $builder->add('primarydays', 'number', array(
                'label' => 'Primary Days',
            ));
            $builder->add('primarytemp', 'number', array(
                'label' => 'Primary Temperature',
            ));
            
            $builder->add('secondarydays', 'number', array(
                'label' => 'Secondary Days',
            ));
            $builder->add('secondarytemp', 'number', array(
                'label' => 'Secondary Temperature',
            ));
            
            $builder->add('tertiarydays', 'number', array(
                'label'    => 'Tertiary Days',
                'required' => FALSE,
            ));
            $builder->add('tertiarytemp', 'number', array(
                'label' => 'Tertiary Temperature',
                'required' => FALSE,
            ));
            
            $builder->add('lagerdays', 'number', array(
                'label'    => 'Lager Days',
                'required' => FALSE,
            ));
            $builder->add('lagertemp', 'number', array(
                'label'    => 'Lager Temperature',
                'required' => FALSE,
            ));
            
            $builder->add('agedays', 'number', array(
                'label' => 'Age Days',
            ));
            $builder->add('agetemp', 'number', array(
                'label' => 'Age Temperature',
            ));

            $builder->add('labelimage');
                        
            $builder->add('link1name', 'text', array(
                'label'    => 'Link 1 Name',
                'required' => FALSE,
            ));
            $builder->add('link1', 'url', array(
                'label' => 'Link 1 URL',
                'required' => FALSE,
            ));

            $builder->add('link2name', 'text', array(
                'label' => 'Link 2 Name',
                'required' => FALSE,
            ));
            $builder->add('link2', 'url', array(
                'label' => 'Link 2 URL',
                'required' => FALSE,
            ));
            
            /** Unused fields? Generated? **/
            
            // $builder->add('mashtype');
            // $builder->add('mashgrainweight');
            // $builder->add('MashSpargeAmt');
            // $builder->add('efficiency', 'percent');
            // $builder->add('ppg');

    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BrewBlogger\BatchBundle\Entity\Brewing'
        ));
    }

    public function getName()
    {
        return 'batch';
    }
}

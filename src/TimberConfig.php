<?php
namespace Teik;

use Teik\Controller\Controller;
use Teik\Traits\Singleton;
use Timber\Twig_Function;
use Timber\Twig_Filter;
use Timber\Timber;
use Timber\Image;
use Teik\Model\Menu;
use Teik\Model\MenuItem;


/**
 * Class used to change Timber configuration
 *
 * @see \Timber\Timber
 */
class TimberConfig
{
  use Singleton;
  public function setup()
  {
    add_filter('timber/context', array($this,'extendContext'),10, 1);
    add_filter('timber/twig', array($this,'extendTwig'),10, 1);
  }

  /**
   * Extend Timber context
   * @param array Current context
   */
  public function extendContext($context)
  {
    $context['menus'] =[
      'main' => new Menu('main'),
      'footer_rules' => new Menu('footer_rules')
    ];
    $context['site']->logo = new Image(teik_get_logo());
    $context['options'] = get_fields('options');
    $context['widgets'] = array(
      'footer_1' => Timber::get_widgets( 'footer-1' ),
      'footer_2' => Timber::get_widgets( 'footer-2' ),
      'footer_3' => Timber::get_widgets( 'footer-3' ),
      'sidebar' => Timber::get_widgets( 'sidebar' ),
    );
    $context['Controller'] = apply_filters( 'fitness/context/controller', new Controller );
    return $context;
  }

  /**
   * Extend twig
   * 
   * @param Timber\Twig Twig instance modified by Timber
   */
  public function extendTwig($twig)
  {
    $twig->addFunction( new Twig_Function('teik_asset', 'teik_asset'));
    $twig->addFunction( new Twig_Function('teik_svg', 'teik_svg'));
    $twig->addFunction( new Twig_Function('img', 'teik_image_tag'));
    
    $twig->addFunction( new Twig_Function('teik_icon', 'teik_icon'));
    return $twig;
  }
}
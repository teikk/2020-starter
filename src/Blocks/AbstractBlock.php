<?php 
namespace Teik\Blocks;

use Timber\Timber;

class AbstractBlock
{
  private $viewsPath = 'components/blocks';

  public function hook()
  {
    add_action('acf/init', [$this,'register']);
  }

  public function register()
  {
    acf_register_block_type(array(
      'name'              => $this->getName(),
      'title'             => $this->getTitle(),
      'description'       => $this->getDescription(),
      'render_callback'   => [$this, 'render'],
      'category'          => $this->getCategory(),
      'supports'          => $this->getSupports()
    ));
  }

  public function getName() : string
  {
    return $this->name;
  }

  public function getTitle() : string
  {
    return $this->title;
  }

  public function getDescription() : string
  {
    return isset($this->description) ? $this->description : '';
  }
  
  public function getCategory() : string
  {
    return isset($this->category) ? $this->category : 'theme-blocks';
  }

  public function getViewsPath() 
  {
    return $this->viewsPath;
  }

  public function getBlockData(array $data = []) : array
  {
    $fields = get_fields();
    if($fields) {
      $data = array_merge($fields, $data);
    }
    return $data;
  }

  public function getSupports()
  {
    return [
      'align' => ['left','right', 'center'],
      'anchor' => true
    ];
  }

  public function render($block, $content = '', $is_preview = false, $post_id = 0)
  {
    $view = $this->getViewsPath() . '/'. $this->getName() .'.twig';
    $view = apply_filters( 'teik/blocks/'. $this->getName() .'/view', $view );

    $data = [
      'block' => $block, 
      'is_preview' => $is_preview,
      'post_' => $post_id
    ];
    Timber::render($view, $this->getBlockData($data));
  }
}
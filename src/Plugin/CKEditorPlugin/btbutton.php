<?php

/**
 * @file
 * Contains Drupal\Ckeditor_bootstrap_buttons\Plugin\CKEditorPlugin\btbutton.
 */

namespace Drupal\Ckeditor_bootstrap_buttons\Plugin\CKEditorPlugin;

use Drupal\editor\Entity\Editor;
use Drupal\ckeditor\CKEditorPluginBase;

/**
 * Defines the "btbutton" plugin.
 *
 * @CKEditorPlugin(
 *   id = "btbutton",
 *   label = @Translation("CKEditor bootstrap button"),
 *   module = "ckeditor_bootstrap_buttons"
 * )
 */
class Btbutton extends CKEditorPluginBase {

  /**
   * Implements \Drupal\ckeditor\Plugin\CKEditorPluginInterface::getFile().
   */
  public function getFile() {
    return drupal_get_path('module', 'ckeditor_bootstrap_buttons') . '/js/plugins/btbutton/plugin.js';
  }

  /**
   * {@inheritdoc}
   */
  public function getLibraries(Editor $editor) {
    return array();
  }

  /**
   * {@inheritdoc}
   */
  public function isInternal() {
    return FALSE;
  }

  /**
   * Implements \Drupal\ckeditor\Plugin\CKEditorPluginButtonsInterface::getButtons().
   */
  public function getButtons() {
    return array(
      'btbutton' => array(
        'label' => t('btbutton'),
        'image' => drupal_get_path('module', 'ckeditor_bootstrap_buttons') . '/js/plugins/btbutton/icons/btbutton.png',
      ),
    );
  }

  /**
   * {@inheritdoc}
   */
  public function getConfig(Editor $editor) {
    return array();
  }

}

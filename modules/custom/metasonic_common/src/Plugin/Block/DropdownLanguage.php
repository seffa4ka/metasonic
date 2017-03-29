<?php

namespace Drupal\metasonic_common\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Url;

/**
 * Class DropdownLanguage.
 *
 * @package Drupal\metasonic_common\Form
 *
 * @Block(
 *   id = "metasonic_common",
 *   admin_label = @Translation("Dropdown Language Selector"),
 *   category = @Translation("Custom Blocks"),
 * )
 */
class DropdownLanguage extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function defaultConfiguration() {
    return [
      'label_display' => FALSE,
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function build() {
    $block = [];
    $language_manager = \Drupal::languageManager();
    $current_language = $language_manager->getCurrentLanguage()->getId();
    $languages = $language_manager->getLanguages();
    if (count($languages) > 1) {
      foreach ($languages as $lid => $item) {
        $url = Url::fromRoute('<current>', [], ['language' => $item]);
        $links[$lid] = [
          'title' => $item->getId(),
          'url' => $url,
        ];
      }
      // Place active language ontop of list.
      $active = $links[$current_language];
      unset($links[$current_language]);
      array_unshift($links, $active);
      $block['switch-language'] = [
        '#type' => 'dropbutton',
        '#links' => $links,
      ];
    }

    return $block;
  }

}

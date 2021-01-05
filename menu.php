<?php
$menu_content = [
  [
    "title" => "Main",
    "link" => "/",
    "submenu" => "none"
  ],
  [
    "title" => "Catalog",
    "link" => "/catalog",
    "submenu" => [
      [
        "title" => "Shirts",
        "link" => "/catalog/shirts/",
      ],
      [
        "title" => "Pants",
        "link" => "/catalog/pants/",
      ],
      [
        "title" => "Accessories",
        "link" => "/catalog/accessories/",
      ]
    ]
  ],
  [
    "title" => "About",
    "link" => "/about",
    "submenu" => "none"
  ],
  [
    "title" => "Contacts",
    "link" => "/contacts",
    "submenu" => "none"
  ],
];

function menu_r($menu_content) {
  $list = '<ul>';
  foreach ($menu_content as $m_item) {
    $list .= "<li><a href=\"{$m_item["link"]}\">{$m_item["title"]}</a>";
    if ($m_item["submenu"] !== "none") {
      $list .= menu_r($m_item["submenu"]);
    }
    $list .= '</li>';
  }
  $list .= '</ul>';
  return $list;
}

echo menu_r($menu_content);

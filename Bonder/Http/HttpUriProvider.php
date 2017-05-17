<?php

namespace Bonder\Http;

/**
 * Returns the URI requested through HTTP.
 * 
 * @author hbandura
 */
final class HttpUriProvider implements \Bonder\UriProvider {
  
  public function getUri() {
    if (empty($_SERVER["DOCUMENT_URI"])) {
      return isset($_SERVER["REQUEST_URI"])?$_SERVER["REQUEST_URI"]:null;
    }
    return isset($_SERVER["DOCUMENT_URI"])?$_SERVER["DOCUMENT_URI"]:null;
  }
  
}
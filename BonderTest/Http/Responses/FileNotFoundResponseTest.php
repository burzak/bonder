<?php

namespace BonderTest\Http\Responses;

/**
 * @author hbandura
 */
final class FileNotFoundResponseTest extends BaseResponseTest {
  
  protected function getCode() {
    return 404;
  }
  
  protected function createResponse($headers, $code, $content) {
    return new \Bonder\Http\Responses\FileNotFoundResponse(
      $content, $headers);
  }
}
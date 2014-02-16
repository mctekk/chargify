<?php

namespace Chargify\Controller;

use \Chargify\Resource\AdjustmentResource as Resource;

class Adjustment extends AbstractController {

  /**
   * Creates a chargify adjustment.
   *
   * @param  $data Keyed array of data according to API docs.
   * @return  Newly created chargify object.
   */
  public function create($id, $data) {
    $adjustment = null;

    $response = $this->request('subscriptions/' . $id .'/adjustments', $data, 'POST');

    if (is_array($response) && is_array($response['adjustment'])) {
      $adjustment = new Resource($response['adjustment']);
    }

    return $adjustment;
  }

}
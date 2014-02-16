<?php


namespace Chargify\Resource;

class AdjustmentResource extends AbstractResource {

  /**
   * Amount represented as a string
   * 
   * @var string
   */
  public $amount;

  /**
   * Amount represented as a number of cents
   * 
   * @var string
   */
  public $amount_in_cents;

  /**
   * A helpful explanation for the adjustment
   * 
   * @var string
   */
  public $memo;

  /**
   * A string that toggles how the adjustment should be applied (Optional) 
   * 
   * @var string
   */
  public $adjustment_method;

  /**
   * Created time
   * 
   * @var DateTime
   */
  public $created_at;

  /**
   * Updated time
   * 
   * @var DateTime
   */  
  public $updated_at;

  public function getName() {
    return 'adjustments';
  }

  /**
   * Filters for datetime
   * 
   * @return array
   */
  public function getFilter() {
    return array(
      'created_at' => function($value) { return new \DateTime($value); },
      'updated_at' => function($value) { return new \DateTime($value); },
    );
  }
}

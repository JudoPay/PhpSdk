<?php

namespace Tests\Builders;

class CompleteThreeDSecureTwoBuilder extends AbstractModelBuilder
{
    public function __construct($receiptId = '12345')
    {
        $this->attributeValues = array(
            'receiptId'            => $receiptId
        );
    }

    public function setCv2($cv2)
    {
        $this->setAttribute('cv2', $cv2);
        return $this;
    }
}

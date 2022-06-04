<?php

namespace MG\Dropship\Ui\Component\Listing\Column\Dropship;

class Options implements \Magento\Framework\Data\OptionSourceInterface
{
    public function toOptionArray()
    {
        $options = [];
        $status = \MG\Dropship\Model\Status::getStatus();
        foreach ($status as $value => $label) {
            $options[] = ['value' => $value, 'label' => $label];
        }

        return $options;
    }
}

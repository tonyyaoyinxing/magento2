<?php
/**
 * Class PaymentAction
 *
 * @author      MundiPagg Embeddables Team <embeddables@mundipagg.com>
 * @copyright   2017 MundiPagg (http://www.mundipagg.com)
 * @license     http://www.mundipagg.com Copyright
 *
 * @link        http://www.mundipagg.com
 */

namespace MundiPagg\MundiPagg\Model\Source;


use Magento\Framework\Option\ArrayInterface;
use MundiPagg\MundiPagg\Model\Enum\BankEnum;

class Bank implements ArrayInterface
{

    public function toOptionArray()
    {
        return [
            [
                'value' => BankEnum::BANCO_DO_BRASIL,
                'label' => __('Banco do Brasil'),
            ],
            [
                'value' => BankEnum::BRADESCO,
                'label' => __('Bradesco')
            ],
            [
                'value' => BankEnum::HSBC,
                'label' => __('HSBC')
            ],
            [
                'value' => BankEnum::ITAU,
                'label' => __('Itau')
            ],
            [
                'value' => BankEnum::SANTANDER,
                'label' => __('Santander')
            ]
        ];
    }
}

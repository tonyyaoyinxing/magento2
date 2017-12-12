<?php
/**
 * Class CreateCreditCardDataProviderInterface
 *
 * @author      MundiPagg Embeddables Team <embeddables@mundipagg.com>
 * @copyright   2017 MundiPagg (http://www.mundipagg.com)
 * @license     http://www.mundipagg.com Copyright
 *
 * @link        http://www.mundipagg.com
 */

namespace MundiPagg\MundiPagg\Api;


interface BilletRequestDataProviderInterface extends BaseRequestDataProviderInterface
{
    /**
     * @return string
     */
    public function getBankType();

    /**
     * @return string
     */
    public function getInstructions();

    /**
     * @return string
     */
    public function getDaysToAddInBoletoExpirationDate();
}

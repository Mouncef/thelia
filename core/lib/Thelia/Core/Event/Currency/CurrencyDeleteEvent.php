<?php
/*************************************************************************************/
/*      This file is part of the Thelia package.                                     */
/*                                                                                   */
/*      Copyright (c) OpenStudio                                                     */
/*      email : dev@thelia.net                                                       */
/*      web : http://www.thelia.net                                                  */
/*                                                                                   */
/*      For the full copyright and license information, please view the LICENSE.txt  */
/*      file that was distributed with this source code.                             */
/*************************************************************************************/

namespace Thelia\Core\Event\Currency;

class CurrencyDeleteEvent extends CurrencyEvent
{
    /**
     * @param int $currencyId
     */
    public function __construct($currencyId)
    {
        $this->setCurrencyId($currencyId);
    }
}

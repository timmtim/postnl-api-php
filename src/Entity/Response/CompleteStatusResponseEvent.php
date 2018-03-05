<?php
/**
 * The MIT License (MIT)
 *
 * Copyright (c) 2017 Thirty Development, LLC
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this software and
 * associated documentation files (the "Software"), to deal in the Software without restriction,
 * including without limitation the rights to use, copy, modify, merge, publish, distribute,
 * sublicense, and/or sell copies of the Software, and to permit persons to whom the Software
 * is furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all copies or
 * substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT
 * NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
 * NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM,
 * DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 *
 * @author    Michael Dekker <michael@thirtybees.com>
 * @copyright 2017-2018 Thirty Development, LLC
 * @license   https://opensource.org/licenses/MIT The MIT License
 */

namespace ThirtyBees\PostNL\Entity\Response;

use ThirtyBees\PostNL\Entity\AbstractEntity;
use ThirtyBees\PostNL\Service\BarcodeService;
use ThirtyBees\PostNL\Service\ConfirmingService;
use ThirtyBees\PostNL\Service\DeliveryDateService;
use ThirtyBees\PostNL\Service\LabellingService;
use ThirtyBees\PostNL\Service\LocationService;
use ThirtyBees\PostNL\Service\ShippingStatusService;
use ThirtyBees\PostNL\Service\TimeframeService;

/**
 * Class CompleteStatusResponseEvent
 *
 * @package ThirtyBees\PostNL\Entity
 *
 * @method string getCode()
 * @method string getDescription()
 * @method string getDestinationLocationCode()
 * @method string getLocationCode()
 * @method string getRouteCode()
 * @method string getRouteName()
 * @method string getTimeStamp()
 *
 * @method CompleteStatusResponseEvent setCode(string $code)
 * @method CompleteStatusResponseEvent setDescription(string $description)
 * @method CompleteStatusResponseEvent setDestinationLocationCode(string $code)
 * @method CompleteStatusResponseEvent setLocationCode(string $code)
 * @method CompleteStatusResponseEvent setRouteCode(string $code)
 * @method CompleteStatusResponseEvent setRouteName(string $name)
 * @method CompleteStatusResponseEvent setTimeStamp(string $timestamp)
 */
class CompleteStatusResponseEvent extends AbstractEntity
{
    /**
     * Default properties and namespaces for the SOAP API
     *
     * @var array $defaultProperties
     */
    public static $defaultProperties = [
        'Barcode'        => [
            'Code'                    => BarcodeService::DOMAIN_NAMESPACE,
            'Description'             => BarcodeService::DOMAIN_NAMESPACE,
            'DestinationLocationCode' => BarcodeService::DOMAIN_NAMESPACE,
            'LocationCode'            => BarcodeService::DOMAIN_NAMESPACE,
            'RouteCode'               => BarcodeService::DOMAIN_NAMESPACE,
            'RouteName'               => BarcodeService::DOMAIN_NAMESPACE,
            'TimeStamp'               => BarcodeService::DOMAIN_NAMESPACE,
        ],
        'Confirming'     => [
            'Code'                    => ConfirmingService::DOMAIN_NAMESPACE,
            'Description'             => ConfirmingService::DOMAIN_NAMESPACE,
            'DestinationLocationCode' => ConfirmingService::DOMAIN_NAMESPACE,
            'LocationCode'            => ConfirmingService::DOMAIN_NAMESPACE,
            'RouteCode'               => ConfirmingService::DOMAIN_NAMESPACE,
            'RouteName'               => ConfirmingService::DOMAIN_NAMESPACE,
            'TimeStamp'               => ConfirmingService::DOMAIN_NAMESPACE,
        ],
        'Labelling'      => [
            'Code'                    => LabellingService::DOMAIN_NAMESPACE,
            'Description'             => LabellingService::DOMAIN_NAMESPACE,
            'DestinationLocationCode' => LabellingService::DOMAIN_NAMESPACE,
            'LocationCode'            => LabellingService::DOMAIN_NAMESPACE,
            'RouteCode'               => LabellingService::DOMAIN_NAMESPACE,
            'RouteName'               => LabellingService::DOMAIN_NAMESPACE,
            'TimeStamp'               => LabellingService::DOMAIN_NAMESPACE,
        ],
        'ShippingStatus' => [
            'Code'                    => ShippingStatusService::DOMAIN_NAMESPACE,
            'Description'             => ShippingStatusService::DOMAIN_NAMESPACE,
            'DestinationLocationCode' => ShippingStatusService::DOMAIN_NAMESPACE,
            'LocationCode'            => ShippingStatusService::DOMAIN_NAMESPACE,
            'RouteCode'               => ShippingStatusService::DOMAIN_NAMESPACE,
            'RouteName'               => ShippingStatusService::DOMAIN_NAMESPACE,
            'TimeStamp'               => ShippingStatusService::DOMAIN_NAMESPACE,
        ],
        'DeliveryDate'   => [
            'Code'                    => DeliveryDateService::DOMAIN_NAMESPACE,
            'Description'             => DeliveryDateService::DOMAIN_NAMESPACE,
            'DestinationLocationCode' => DeliveryDateService::DOMAIN_NAMESPACE,
            'LocationCode'            => DeliveryDateService::DOMAIN_NAMESPACE,
            'RouteCode'               => DeliveryDateService::DOMAIN_NAMESPACE,
            'RouteName'               => DeliveryDateService::DOMAIN_NAMESPACE,
            'TimeStamp'               => DeliveryDateService::DOMAIN_NAMESPACE,
        ],
        'Location'       => [
            'Code'                    => LocationService::DOMAIN_NAMESPACE,
            'Description'             => LocationService::DOMAIN_NAMESPACE,
            'DestinationLocationCode' => LocationService::DOMAIN_NAMESPACE,
            'LocationCode'            => LocationService::DOMAIN_NAMESPACE,
            'RouteCode'               => LocationService::DOMAIN_NAMESPACE,
            'RouteName'               => LocationService::DOMAIN_NAMESPACE,
            'TimeStamp'               => LocationService::DOMAIN_NAMESPACE,
        ],
        'Timeframe'      => [
            'Code'                    => TimeframeService::DOMAIN_NAMESPACE,
            'Description'             => TimeframeService::DOMAIN_NAMESPACE,
            'DestinationLocationCode' => TimeframeService::DOMAIN_NAMESPACE,
            'LocationCode'            => TimeframeService::DOMAIN_NAMESPACE,
            'RouteCode'               => TimeframeService::DOMAIN_NAMESPACE,
            'RouteName'               => TimeframeService::DOMAIN_NAMESPACE,
            'TimeStamp'               => TimeframeService::DOMAIN_NAMESPACE,
        ],
    ];
    // @codingStandardsIgnoreStart
    /** @var string $Code */
    protected $Code;
    /** @var string $Description */
    protected $Description;
    /** @var string $DestinationLocationCode */
    protected $DestinationLocationCode;
    /** @var string $LocationCode */
    protected $LocationCode;
    /** @var string $RouteCode */
    protected $RouteCode;
    /** @var string $RouteName */
    protected $RouteName;
    /** @var string $TimeStamp */
    protected $TimeStamp;
    // @codingStandardsIgnoreEnd

    /**
     * CompleteStatusResponseEvent constructor.
     *
     * @param string $code
     * @param string $description
     * @param string $destinationLocationCode
     * @param string $locationCode
     * @param string $routeCode
     * @param string $routeName
     * @param string $timeStamp
     */
    public function __construct(
        $code = null,
        $description = null,
        $destinationLocationCode = null,
        $locationCode = null,
        $routeCode = null,
        $routeName = null,
        $timeStamp = null
    ) {
        parent::__construct();

        $this->setCode($code);
        $this->setDescription($description);
        $this->setDestinationLocationCode($destinationLocationCode);
        $this->setLocationCode($locationCode);
        $this->setRouteCode($routeCode);
        $this->setRouteName($routeName);
        $this->setTimeStamp($timeStamp);
    }
}

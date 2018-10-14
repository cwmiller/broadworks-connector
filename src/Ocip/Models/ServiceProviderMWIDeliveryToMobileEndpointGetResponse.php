<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderMWIDeliveryToMobileEndpointGetResponse
 *
 * Response to ServiceProviderMWIDeliveryToMobileEndpointGetRequest.
 *         
 *         The templateActivationTable contains the list of templates defined for
 * the service provider.
 *         The column headings are "Enable", "Language", "Type".
 *
 * @see ServiceProviderMWIDeliveryToMobileEndpointGetRequest
 */
class ServiceProviderMWIDeliveryToMobileEndpointGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName templateActivationTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $templateActivationTable = null;

    /**
     * Getter for templateActivationTable
     *
     * @ElementName templateActivationTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getTemplateActivationTable()
    {
        return $this->templateActivationTable;
    }

    /**
     * Setter for templateActivationTable
     *
     * @ElementName templateActivationTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $templateActivationTable
     * @return $this
     */
    public function setTemplateActivationTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $templateActivationTable)
    {
        $this->templateActivationTable = $templateActivationTable;
        return $this;
    }


}


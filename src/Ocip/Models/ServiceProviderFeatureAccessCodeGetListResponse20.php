<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderFeatureAccessCodeGetListResponse20
 *
 * Response to the ServiceProviderFeatureAccessCodeGetListRequest20.
 *         In release 20 the "Call Recording" FAC name is changed to
 *         "Call Recording - Start".
 *         Replaced by: ServiceProviderFeatureAccessCodeGetListResponse21
 *
 * @see ServiceProviderFeatureAccessCodeGetListRequest20
 * @see ServiceProviderFeatureAccessCodeGetListResponse21
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:19280","type":"sequence"}]
 */
class ServiceProviderFeatureAccessCodeGetListResponse20 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName featureAccessCode
     * @Type \CWM\BroadWorksConnector\Ocip\Models\FeatureAccessCodeEntry
     * @Array
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:19280
     * @var \CWM\BroadWorksConnector\Ocip\Models\FeatureAccessCodeEntry[]
     */
    protected $featureAccessCode = [
        
    ];

    /**
     * Getter for featureAccessCode
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\FeatureAccessCodeEntry[]
     */
    public function getFeatureAccessCode()
    {
        return $this->featureAccessCode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->featureAccessCode;
    }

    /**
     * Setter for featureAccessCode
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\FeatureAccessCodeEntry[] $featureAccessCode
     * @return $this
     */
    public function setFeatureAccessCode(array $featureAccessCode)
    {
        $this->featureAccessCode = $featureAccessCode;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetFeatureAccessCode()
    {
        $this->featureAccessCode = null;
        return $this;
    }

    /**
     * Adder for featureAccessCode
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\FeatureAccessCodeEntry $featureAccessCode
     * @return $this
     */
    public function addFeatureAccessCode($featureAccessCode)
    {
        $this->featureAccessCode[] = $featureAccessCode;
        return $this;
    }
}


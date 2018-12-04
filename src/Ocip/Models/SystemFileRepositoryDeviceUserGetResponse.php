<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemFileRepositoryDeviceUserGetResponse
 *
 * Response to SystemFileRepositoryDeviceUserGetRequest.
 *
 * @see SystemFileRepositoryDeviceUserGetRequest
 * @Groups [{"id":"610f84d3e188f0477c3ae1a82ee036da:8872","type":"sequence"}]
 */
class SystemFileRepositoryDeviceUserGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName allowPut
     * @Type bool
     * @Group 610f84d3e188f0477c3ae1a82ee036da:8872
     * @var bool|null
     */
    private $allowPut = null;

    /**
     * @ElementName allowDelete
     * @Type bool
     * @Group 610f84d3e188f0477c3ae1a82ee036da:8872
     * @var bool|null
     */
    private $allowDelete = null;

    /**
     * @ElementName allowGet
     * @Type bool
     * @Group 610f84d3e188f0477c3ae1a82ee036da:8872
     * @var bool|null
     */
    private $allowGet = null;

    /**
     * Getter for allowPut
     *
     * @return bool
     */
    public function getAllowPut()
    {
        return $this->allowPut instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->allowPut;
    }

    /**
     * Setter for allowPut
     *
     * @param bool $allowPut
     * @return $this
     */
    public function setAllowPut($allowPut)
    {
        $this->allowPut = $allowPut;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAllowPut()
    {
        $this->allowPut = null;
        return $this;
    }

    /**
     * Getter for allowDelete
     *
     * @return bool
     */
    public function getAllowDelete()
    {
        return $this->allowDelete instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->allowDelete;
    }

    /**
     * Setter for allowDelete
     *
     * @param bool $allowDelete
     * @return $this
     */
    public function setAllowDelete($allowDelete)
    {
        $this->allowDelete = $allowDelete;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAllowDelete()
    {
        $this->allowDelete = null;
        return $this;
    }

    /**
     * Getter for allowGet
     *
     * @return bool
     */
    public function getAllowGet()
    {
        return $this->allowGet instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->allowGet;
    }

    /**
     * Setter for allowGet
     *
     * @param bool $allowGet
     * @return $this
     */
    public function setAllowGet($allowGet)
    {
        $this->allowGet = $allowGet;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAllowGet()
    {
        $this->allowGet = null;
        return $this;
    }


}


<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemFileRepositoryDeviceUserGetResponse
 *
 * Response to SystemFileRepositoryDeviceUserGetRequest.
 *
 * @see SystemFileRepositoryDeviceUserGetRequest
 */
class SystemFileRepositoryDeviceUserGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName allowPut
     * @var bool|null
     */
    private $allowPut = null;

    /**
     * @ElementName allowDelete
     * @var bool|null
     */
    private $allowDelete = null;

    /**
     * @ElementName allowGet
     * @var bool|null
     */
    private $allowGet = null;

    /**
     * Getter for allowPut
     *
     * @ElementName allowPut
     * @return bool|null
     */
    public function getAllowPut()
    {
        return $this->allowPut;
    }

    /**
     * Setter for allowPut
     *
     * @ElementName allowPut
     * @param bool|null $allowPut
     * @return $this
     */
    public function setAllowPut($allowPut)
    {
        $this->allowPut = $allowPut;
        return $this;
    }

    /**
     * Getter for allowDelete
     *
     * @ElementName allowDelete
     * @return bool|null
     */
    public function getAllowDelete()
    {
        return $this->allowDelete;
    }

    /**
     * Setter for allowDelete
     *
     * @ElementName allowDelete
     * @param bool|null $allowDelete
     * @return $this
     */
    public function setAllowDelete($allowDelete)
    {
        $this->allowDelete = $allowDelete;
        return $this;
    }

    /**
     * Getter for allowGet
     *
     * @ElementName allowGet
     * @return bool|null
     */
    public function getAllowGet()
    {
        return $this->allowGet;
    }

    /**
     * Setter for allowGet
     *
     * @ElementName allowGet
     * @param bool|null $allowGet
     * @return $this
     */
    public function setAllowGet($allowGet)
    {
        $this->allowGet = $allowGet;
        return $this;
    }


}


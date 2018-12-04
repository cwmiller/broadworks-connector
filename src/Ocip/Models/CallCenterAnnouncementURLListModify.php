<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterAnnouncementURLListModify
 *
 * Contains a list of URLs for modify.
 *
 * @Groups [{"id":"18b369af88e42ffdb4166615c670ce2c:664","type":"sequence"}]
 */
class CallCenterAnnouncementURLListModify
{

    /**
     * @ElementName url1
     * @Type string
     * @Nillable
     * @Optional
     * @Group 18b369af88e42ffdb4166615c670ce2c:664
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $url1 = null;

    /**
     * @ElementName url2
     * @Type string
     * @Nillable
     * @Optional
     * @Group 18b369af88e42ffdb4166615c670ce2c:664
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $url2 = null;

    /**
     * @ElementName url3
     * @Type string
     * @Nillable
     * @Optional
     * @Group 18b369af88e42ffdb4166615c670ce2c:664
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $url3 = null;

    /**
     * @ElementName url4
     * @Type string
     * @Nillable
     * @Optional
     * @Group 18b369af88e42ffdb4166615c670ce2c:664
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $url4 = null;

    /**
     * Getter for url1
     *
     * @return string|null
     */
    public function getUrl1()
    {
        return $this->url1 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->url1;
    }

    /**
     * Setter for url1
     *
     * @param string|null $url1
     * @return $this
     */
    public function setUrl1($url1)
    {
        if ($url1 === null) {
            $this->url1 = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->url1 = $url1;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUrl1()
    {
        $this->url1 = null;
        return $this;
    }

    /**
     * Getter for url2
     *
     * @return string|null
     */
    public function getUrl2()
    {
        return $this->url2 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->url2;
    }

    /**
     * Setter for url2
     *
     * @param string|null $url2
     * @return $this
     */
    public function setUrl2($url2)
    {
        if ($url2 === null) {
            $this->url2 = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->url2 = $url2;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUrl2()
    {
        $this->url2 = null;
        return $this;
    }

    /**
     * Getter for url3
     *
     * @return string|null
     */
    public function getUrl3()
    {
        return $this->url3 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->url3;
    }

    /**
     * Setter for url3
     *
     * @param string|null $url3
     * @return $this
     */
    public function setUrl3($url3)
    {
        if ($url3 === null) {
            $this->url3 = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->url3 = $url3;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUrl3()
    {
        $this->url3 = null;
        return $this;
    }

    /**
     * Getter for url4
     *
     * @return string|null
     */
    public function getUrl4()
    {
        return $this->url4 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->url4;
    }

    /**
     * Setter for url4
     *
     * @param string|null $url4
     * @return $this
     */
    public function setUrl4($url4)
    {
        if ($url4 === null) {
            $this->url4 = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->url4 = $url4;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUrl4()
    {
        $this->url4 = null;
        return $this;
    }


}


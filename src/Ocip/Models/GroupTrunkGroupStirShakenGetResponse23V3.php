<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupTrunkGroupStirShakenGetResponse23V3
 *
 * Response to the GroupTrunkGroupStirShakenGetRequest23V3.
 *         Replaced by GroupTrunkGroupStirShakenGetResponse23V4.
 *
 * @see GroupTrunkGroupStirShakenGetRequest23V3
 * @see GroupTrunkGroupStirShakenGetResponse23V4
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:18362","type":"sequence"}]
 */
class GroupTrunkGroupStirShakenGetResponse23V3 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName useParentLevelSettings
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:18362
     * @var bool|null
     */
    protected $useParentLevelSettings = null;

    /**
     * @ElementName signingPolicy
     * @Type \CWM\BroadWorksConnector\Ocip\Models\StirShakenSigningPolicy
     * @Group d8f04177e438f303b41c211e518706bf:18362
     * @var \CWM\BroadWorksConnector\Ocip\Models\StirShakenSigningPolicy|null
     */
    protected $signingPolicy = null;

    /**
     * @ElementName taggingPolicy
     * @Type \CWM\BroadWorksConnector\Ocip\Models\StirShakenTaggingPolicy
     * @Group d8f04177e438f303b41c211e518706bf:18362
     * @var \CWM\BroadWorksConnector\Ocip\Models\StirShakenTaggingPolicy|null
     */
    protected $taggingPolicy = null;

    /**
     * @ElementName signingServiceURL
     * @Type string
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:18362
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    protected $signingServiceURL = null;

    /**
     * @ElementName tagFromOrPAI
     * @Type \CWM\BroadWorksConnector\Ocip\Models\StirShakenTagFromOrPAI
     * @Group d8f04177e438f303b41c211e518706bf:18362
     * @var \CWM\BroadWorksConnector\Ocip\Models\StirShakenTagFromOrPAI|null
     */
    protected $tagFromOrPAI = null;

    /**
     * @ElementName verstatTag
     * @Type \CWM\BroadWorksConnector\Ocip\Models\StirShakenVerstatTag
     * @Group d8f04177e438f303b41c211e518706bf:18362
     * @var \CWM\BroadWorksConnector\Ocip\Models\StirShakenVerstatTag|null
     */
    protected $verstatTag = null;

    /**
     * @ElementName useOSValueForOrigId
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:18362
     * @var bool|null
     */
    protected $useOSValueForOrigId = null;

    /**
     * @ElementName origUUID
     * @Type string
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:18362
     * @MaxLength 36
     * @var string|null
     */
    protected $origUUID = null;

    /**
     * @ElementName attestationLevel
     * @Type \CWM\BroadWorksConnector\Ocip\Models\StirShakenAttestationLevel
     * @Group d8f04177e438f303b41c211e518706bf:18362
     * @var \CWM\BroadWorksConnector\Ocip\Models\StirShakenAttestationLevel|null
     */
    protected $attestationLevel = null;

    /**
     * @ElementName enableSigningForUnscreenedTrunkGroupOriginations
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:18362
     * @var bool|null
     */
    protected $enableSigningForUnscreenedTrunkGroupOriginations = null;

    /**
     * @ElementName enableTaggingForUnscreenedTrunkGroupOriginations
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:18362
     * @var bool|null
     */
    protected $enableTaggingForUnscreenedTrunkGroupOriginations = null;

    /**
     * @ElementName unscreenedTrunkGroupOriginationAttestationLevel
     * @Type \CWM\BroadWorksConnector\Ocip\Models\StirShakenUnscreenedTrunkGroupOriginationAttestationLevel
     * @Group d8f04177e438f303b41c211e518706bf:18362
     * @var \CWM\BroadWorksConnector\Ocip\Models\StirShakenUnscreenedTrunkGroupOriginationAttestationLevel|null
     */
    protected $unscreenedTrunkGroupOriginationAttestationLevel = null;

    /**
     * @ElementName checkDirectoryNumbersForAttestation
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:18362
     * @var bool|null
     */
    protected $checkDirectoryNumbersForAttestation = null;

    /**
     * @ElementName matchUnassignedNumbersOnly
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:18362
     * @var bool|null
     */
    protected $matchUnassignedNumbersOnly = null;

    /**
     * @ElementName enableTaggingForRedirectedCalls
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:18362
     * @var bool|null
     */
    protected $enableTaggingForRedirectedCalls = null;

    /**
     * @ElementName accessSideIngressIdentityHeaderProxyPolicy
     * @Type \CWM\BroadWorksConnector\Ocip\Models\StirShakenSigningPolicy
     * @Group d8f04177e438f303b41c211e518706bf:18362
     * @var \CWM\BroadWorksConnector\Ocip\Models\StirShakenSigningPolicy|null
     */
    protected $accessSideIngressIdentityHeaderProxyPolicy = null;

    /**
     * @ElementName accessSideIngressTaggingProxyPolicy
     * @Type \CWM\BroadWorksConnector\Ocip\Models\StirShakenTaggingPolicy
     * @Group d8f04177e438f303b41c211e518706bf:18362
     * @var \CWM\BroadWorksConnector\Ocip\Models\StirShakenTaggingPolicy|null
     */
    protected $accessSideIngressTaggingProxyPolicy = null;

    /**
     * Getter for useParentLevelSettings
     *
     * @return bool
     */
    public function getUseParentLevelSettings()
    {
        return $this->useParentLevelSettings instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useParentLevelSettings;
    }

    /**
     * Setter for useParentLevelSettings
     *
     * @param bool $useParentLevelSettings
     * @return $this
     */
    public function setUseParentLevelSettings($useParentLevelSettings)
    {
        $this->useParentLevelSettings = $useParentLevelSettings;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseParentLevelSettings()
    {
        $this->useParentLevelSettings = null;
        return $this;
    }

    /**
     * Getter for signingPolicy
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\StirShakenSigningPolicy
     */
    public function getSigningPolicy()
    {
        return $this->signingPolicy instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->signingPolicy;
    }

    /**
     * Setter for signingPolicy
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\StirShakenSigningPolicy $signingPolicy
     * @return $this
     */
    public function setSigningPolicy(\CWM\BroadWorksConnector\Ocip\Models\StirShakenSigningPolicy $signingPolicy)
    {
        $this->signingPolicy = $signingPolicy;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSigningPolicy()
    {
        $this->signingPolicy = null;
        return $this;
    }

    /**
     * Getter for taggingPolicy
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\StirShakenTaggingPolicy
     */
    public function getTaggingPolicy()
    {
        return $this->taggingPolicy instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->taggingPolicy;
    }

    /**
     * Setter for taggingPolicy
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\StirShakenTaggingPolicy $taggingPolicy
     * @return $this
     */
    public function setTaggingPolicy(\CWM\BroadWorksConnector\Ocip\Models\StirShakenTaggingPolicy $taggingPolicy)
    {
        $this->taggingPolicy = $taggingPolicy;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTaggingPolicy()
    {
        $this->taggingPolicy = null;
        return $this;
    }

    /**
     * Getter for signingServiceURL
     *
     * @return string
     */
    public function getSigningServiceURL()
    {
        return $this->signingServiceURL instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->signingServiceURL;
    }

    /**
     * Setter for signingServiceURL
     *
     * @param string $signingServiceURL
     * @return $this
     */
    public function setSigningServiceURL($signingServiceURL)
    {
        $this->signingServiceURL = $signingServiceURL;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSigningServiceURL()
    {
        $this->signingServiceURL = null;
        return $this;
    }

    /**
     * Getter for tagFromOrPAI
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\StirShakenTagFromOrPAI
     */
    public function getTagFromOrPAI()
    {
        return $this->tagFromOrPAI instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->tagFromOrPAI;
    }

    /**
     * Setter for tagFromOrPAI
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\StirShakenTagFromOrPAI $tagFromOrPAI
     * @return $this
     */
    public function setTagFromOrPAI(\CWM\BroadWorksConnector\Ocip\Models\StirShakenTagFromOrPAI $tagFromOrPAI)
    {
        $this->tagFromOrPAI = $tagFromOrPAI;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTagFromOrPAI()
    {
        $this->tagFromOrPAI = null;
        return $this;
    }

    /**
     * Getter for verstatTag
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\StirShakenVerstatTag
     */
    public function getVerstatTag()
    {
        return $this->verstatTag instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->verstatTag;
    }

    /**
     * Setter for verstatTag
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\StirShakenVerstatTag $verstatTag
     * @return $this
     */
    public function setVerstatTag(\CWM\BroadWorksConnector\Ocip\Models\StirShakenVerstatTag $verstatTag)
    {
        $this->verstatTag = $verstatTag;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetVerstatTag()
    {
        $this->verstatTag = null;
        return $this;
    }

    /**
     * Getter for useOSValueForOrigId
     *
     * @return bool
     */
    public function getUseOSValueForOrigId()
    {
        return $this->useOSValueForOrigId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useOSValueForOrigId;
    }

    /**
     * Setter for useOSValueForOrigId
     *
     * @param bool $useOSValueForOrigId
     * @return $this
     */
    public function setUseOSValueForOrigId($useOSValueForOrigId)
    {
        $this->useOSValueForOrigId = $useOSValueForOrigId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseOSValueForOrigId()
    {
        $this->useOSValueForOrigId = null;
        return $this;
    }

    /**
     * Getter for origUUID
     *
     * @return string
     */
    public function getOrigUUID()
    {
        return $this->origUUID instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->origUUID;
    }

    /**
     * Setter for origUUID
     *
     * @param string $origUUID
     * @return $this
     */
    public function setOrigUUID($origUUID)
    {
        $this->origUUID = $origUUID;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetOrigUUID()
    {
        $this->origUUID = null;
        return $this;
    }

    /**
     * Getter for attestationLevel
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\StirShakenAttestationLevel
     */
    public function getAttestationLevel()
    {
        return $this->attestationLevel instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->attestationLevel;
    }

    /**
     * Setter for attestationLevel
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\StirShakenAttestationLevel $attestationLevel
     * @return $this
     */
    public function setAttestationLevel(\CWM\BroadWorksConnector\Ocip\Models\StirShakenAttestationLevel $attestationLevel)
    {
        $this->attestationLevel = $attestationLevel;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAttestationLevel()
    {
        $this->attestationLevel = null;
        return $this;
    }

    /**
     * Getter for enableSigningForUnscreenedTrunkGroupOriginations
     *
     * @return bool
     */
    public function getEnableSigningForUnscreenedTrunkGroupOriginations()
    {
        return $this->enableSigningForUnscreenedTrunkGroupOriginations instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableSigningForUnscreenedTrunkGroupOriginations;
    }

    /**
     * Setter for enableSigningForUnscreenedTrunkGroupOriginations
     *
     * @param bool $enableSigningForUnscreenedTrunkGroupOriginations
     * @return $this
     */
    public function setEnableSigningForUnscreenedTrunkGroupOriginations($enableSigningForUnscreenedTrunkGroupOriginations)
    {
        $this->enableSigningForUnscreenedTrunkGroupOriginations = $enableSigningForUnscreenedTrunkGroupOriginations;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableSigningForUnscreenedTrunkGroupOriginations()
    {
        $this->enableSigningForUnscreenedTrunkGroupOriginations = null;
        return $this;
    }

    /**
     * Getter for enableTaggingForUnscreenedTrunkGroupOriginations
     *
     * @return bool
     */
    public function getEnableTaggingForUnscreenedTrunkGroupOriginations()
    {
        return $this->enableTaggingForUnscreenedTrunkGroupOriginations instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableTaggingForUnscreenedTrunkGroupOriginations;
    }

    /**
     * Setter for enableTaggingForUnscreenedTrunkGroupOriginations
     *
     * @param bool $enableTaggingForUnscreenedTrunkGroupOriginations
     * @return $this
     */
    public function setEnableTaggingForUnscreenedTrunkGroupOriginations($enableTaggingForUnscreenedTrunkGroupOriginations)
    {
        $this->enableTaggingForUnscreenedTrunkGroupOriginations = $enableTaggingForUnscreenedTrunkGroupOriginations;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableTaggingForUnscreenedTrunkGroupOriginations()
    {
        $this->enableTaggingForUnscreenedTrunkGroupOriginations = null;
        return $this;
    }

    /**
     * Getter for unscreenedTrunkGroupOriginationAttestationLevel
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\StirShakenUnscreenedTrunkGroupOriginationAttestationLevel
     */
    public function getUnscreenedTrunkGroupOriginationAttestationLevel()
    {
        return $this->unscreenedTrunkGroupOriginationAttestationLevel instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->unscreenedTrunkGroupOriginationAttestationLevel;
    }

    /**
     * Setter for unscreenedTrunkGroupOriginationAttestationLevel
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\StirShakenUnscreenedTrunkGroupOriginationAttestationLevel $unscreenedTrunkGroupOriginationAttestationLevel
     * @return $this
     */
    public function setUnscreenedTrunkGroupOriginationAttestationLevel(\CWM\BroadWorksConnector\Ocip\Models\StirShakenUnscreenedTrunkGroupOriginationAttestationLevel $unscreenedTrunkGroupOriginationAttestationLevel)
    {
        $this->unscreenedTrunkGroupOriginationAttestationLevel = $unscreenedTrunkGroupOriginationAttestationLevel;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUnscreenedTrunkGroupOriginationAttestationLevel()
    {
        $this->unscreenedTrunkGroupOriginationAttestationLevel = null;
        return $this;
    }

    /**
     * Getter for checkDirectoryNumbersForAttestation
     *
     * @return bool
     */
    public function getCheckDirectoryNumbersForAttestation()
    {
        return $this->checkDirectoryNumbersForAttestation instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->checkDirectoryNumbersForAttestation;
    }

    /**
     * Setter for checkDirectoryNumbersForAttestation
     *
     * @param bool $checkDirectoryNumbersForAttestation
     * @return $this
     */
    public function setCheckDirectoryNumbersForAttestation($checkDirectoryNumbersForAttestation)
    {
        $this->checkDirectoryNumbersForAttestation = $checkDirectoryNumbersForAttestation;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCheckDirectoryNumbersForAttestation()
    {
        $this->checkDirectoryNumbersForAttestation = null;
        return $this;
    }

    /**
     * Getter for matchUnassignedNumbersOnly
     *
     * @return bool
     */
    public function getMatchUnassignedNumbersOnly()
    {
        return $this->matchUnassignedNumbersOnly instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->matchUnassignedNumbersOnly;
    }

    /**
     * Setter for matchUnassignedNumbersOnly
     *
     * @param bool $matchUnassignedNumbersOnly
     * @return $this
     */
    public function setMatchUnassignedNumbersOnly($matchUnassignedNumbersOnly)
    {
        $this->matchUnassignedNumbersOnly = $matchUnassignedNumbersOnly;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMatchUnassignedNumbersOnly()
    {
        $this->matchUnassignedNumbersOnly = null;
        return $this;
    }

    /**
     * Getter for enableTaggingForRedirectedCalls
     *
     * @return bool
     */
    public function getEnableTaggingForRedirectedCalls()
    {
        return $this->enableTaggingForRedirectedCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableTaggingForRedirectedCalls;
    }

    /**
     * Setter for enableTaggingForRedirectedCalls
     *
     * @param bool $enableTaggingForRedirectedCalls
     * @return $this
     */
    public function setEnableTaggingForRedirectedCalls($enableTaggingForRedirectedCalls)
    {
        $this->enableTaggingForRedirectedCalls = $enableTaggingForRedirectedCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableTaggingForRedirectedCalls()
    {
        $this->enableTaggingForRedirectedCalls = null;
        return $this;
    }

    /**
     * Getter for accessSideIngressIdentityHeaderProxyPolicy
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\StirShakenSigningPolicy
     */
    public function getAccessSideIngressIdentityHeaderProxyPolicy()
    {
        return $this->accessSideIngressIdentityHeaderProxyPolicy instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->accessSideIngressIdentityHeaderProxyPolicy;
    }

    /**
     * Setter for accessSideIngressIdentityHeaderProxyPolicy
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\StirShakenSigningPolicy $accessSideIngressIdentityHeaderProxyPolicy
     * @return $this
     */
    public function setAccessSideIngressIdentityHeaderProxyPolicy(\CWM\BroadWorksConnector\Ocip\Models\StirShakenSigningPolicy $accessSideIngressIdentityHeaderProxyPolicy)
    {
        $this->accessSideIngressIdentityHeaderProxyPolicy = $accessSideIngressIdentityHeaderProxyPolicy;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAccessSideIngressIdentityHeaderProxyPolicy()
    {
        $this->accessSideIngressIdentityHeaderProxyPolicy = null;
        return $this;
    }

    /**
     * Getter for accessSideIngressTaggingProxyPolicy
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\StirShakenTaggingPolicy
     */
    public function getAccessSideIngressTaggingProxyPolicy()
    {
        return $this->accessSideIngressTaggingProxyPolicy instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->accessSideIngressTaggingProxyPolicy;
    }

    /**
     * Setter for accessSideIngressTaggingProxyPolicy
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\StirShakenTaggingPolicy $accessSideIngressTaggingProxyPolicy
     * @return $this
     */
    public function setAccessSideIngressTaggingProxyPolicy(\CWM\BroadWorksConnector\Ocip\Models\StirShakenTaggingPolicy $accessSideIngressTaggingProxyPolicy)
    {
        $this->accessSideIngressTaggingProxyPolicy = $accessSideIngressTaggingProxyPolicy;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAccessSideIngressTaggingProxyPolicy()
    {
        $this->accessSideIngressTaggingProxyPolicy = null;
        return $this;
    }
}


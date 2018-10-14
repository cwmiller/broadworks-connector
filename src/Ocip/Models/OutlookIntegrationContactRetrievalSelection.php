<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * OutlookIntegrationContactRetrievalSelection
 *
 * Microsoft Outlook contact database search option.
 *         Controls which contacts are retrieved from outlook.
 *
 * @method static OutlookIntegrationContactRetrievalSelection
 * RETRIEVE_DEFAULT_CONTACT_FOLDER_ONLY()
 * @method static OutlookIntegrationContactRetrievalSelection
 * RETRIEVE_ALL_CONTACTS()
 * @ValueType string
 */
class OutlookIntegrationContactRetrievalSelection extends \MyCLabs\Enum\Enum
{

    const RETRIEVE_DEFAULT_CONTACT_FOLDER_ONLY = 'Retrieve Default Contact Folder Only';

    const RETRIEVE_ALL_CONTACTS = 'Retrieve All Contacts';


}


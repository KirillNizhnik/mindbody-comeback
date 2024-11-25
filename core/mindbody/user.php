<?php
function get_mindbody_user_by_email($email, $staff_token, $api_key, $site_id) {
    $url = 'https://api.mindbodyonline.com/public/v6/client/clients';
    if (is_wp_error($staff_token)) {
        return 'Error: unable to get token';
    }

    $data = [
        'SearchText' => $email
    ];


    $curl = curl_init();
    curl_setopt_array($curl, [
        CURLOPT_URL => $url . '?' . http_build_query($data),
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HTTPHEADER => [
            'Authorization: Bearer ' . $staff_token,
            'Accept: application/json',
            'Api-Key: ' . $api_key,
            'siteId:' . $site_id,
            'Content-Type: application/json',
        ],
    ]);

    $response = curl_exec($curl);
    $httpcode = curl_getinfo($curl, CURLINFO_HTTP_CODE);

    curl_close($curl);

    if ($httpcode == 200) {
        $responseData = json_decode($response, true);

        if (!empty($responseData['Clients'])) {
            return $responseData['Clients'][0];
        } else {
            return 'User not found';
        }
    } else {
        return 'Error: ' . $response;
    }
}

function register_mindbody_user($api_key, $staff_token, $site_id, $first_name, $last_name, $email, $phone) {
    $url = 'https://api.mindbodyonline.com/public/v6/client/addclient';

    $data = [
        'FirstName' => $first_name,
        'LastName' => $last_name,
        'Email' => $email,
        'MobilePhone' => $phone,

    ];

    $curl = curl_init();
    curl_setopt_array($curl, [
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => json_encode($data),
        CURLOPT_HTTPHEADER => [
            'Authorization: Bearer ' . $staff_token,
            'api-key: ' . $api_key,
            'Accept: application/json',
            'siteId:' . $site_id,
            'Content-Type: application/json',
        ],
    ]);

    $response = curl_exec($curl);
    $httpcode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
    curl_close($curl);

    if ($httpcode == 200) {
        return json_decode($response, true);
    } else {
        return 'Error: ' . $response;
    }
}

function get_mindbody_required_client_fields() {
    $url = 'https://api.mindbodyonline.com/public/v6/client/requiredclientfields';

    $staff_token = get_mindbody_token();
    if (is_wp_error($staff_token)) {
        return 'Error: Unable to get token';
    }

    $api_key = get_field('mindbody_api_key', 'option');
    if (!$api_key) {
        return 'Error: API key missing';
    }

    $curl = curl_init();
    curl_setopt_array($curl, [
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => [
            'Authorization: Bearer ' . $staff_token['AccessToken'],
            'api-key: ' . $api_key,
            'Accept: application/json',
            'siteId:' . get_field('mindbody_site_id', 'option'),
        ],
    ]);


    $response = curl_exec($curl);
    $httpcode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
    curl_close($curl);

    if ($httpcode == 200) {
        return json_decode($response, true);
    } else {
        return 'Error: ' . $response;
    }
}


function hasUserActivity($user_id, $staff_token, $api_key, $site_id): bool
{

    $token = $staff_token;



    $attendance_url = "https://api.mindbodyonline.com/public/v6/client/clientvisits";
    $schedule_url = "https://api.mindbodyonline.com/public/v6/client/clientschedule";

    $params = [
        'clientId' => $user_id,
        'StartDate' => '1990-01-01T00:00:00Z',
        'EndDate' => '2050-12-31T23:59:59Z',
    ];

    $headers = [
        'Authorization: Bearer ' . $token,
        'Api-Key: ' . $api_key,
        'Accept: application/json',
        'SiteId: ' . $site_id,
    ];

    function executeCurlRequest($url, $params, $headers)
    {
        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL => $url . '?' . http_build_query($params),
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTPHEADER => $headers,
        ]);

        $response = curl_exec($curl);
        $httpcode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        curl_close($curl);

        if ($httpcode === 200) {
            return json_decode($response, true);
        } else {
            error_log("MindBody API Error ($httpcode): $response");
            return null;
        }
    }

    $attendance_result = executeCurlRequest($attendance_url, $params, $headers);
    if ($attendance_result !== null && isset($attendance_result['Visits']) && count($attendance_result['Visits']) > 0) {
        return true;
    }

    $schedule_result = executeCurlRequest($schedule_url, $params, $headers);

    if ($schedule_result !== null && isset($schedule_result['Classes']) && count($schedule_result['Classes']) > 0) {
        return true;
    }
    $api = new MindBodyAPI($staff_token, $api_key, $site_id);
    $user_info = $api->getClientInfo($user_id);
    var_dump($user_info);
    return false;
}

class MindBodyAPI
{
    private string $staffToken;
    private string $apiKey;
    private string $siteId;

    public function __construct(string $staffToken, string $apiKey, string $siteId)
    {
        $this->staffToken = $staffToken;
        $this->apiKey = $apiKey;
        $this->siteId = $siteId;
    }

    /**
     * Executes a CURL request to the given URL with parameters and headers.
     *
     * @param string $url API endpoint URL.
     * @param array $params Query parameters.
     * @return array|null API response data or null on error.
     */
    private function executeRequest(string $url, array $params): ?array
    {
        $headers = [
            'Authorization: Bearer ' . $this->staffToken,
            'Api-Key: ' . $this->apiKey,
            'Accept: application/json',
            'SiteId: ' . $this->siteId,
        ];

        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL => $url . '?' . http_build_query($params),
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTPHEADER => $headers,
            CURLOPT_FAILONERROR => true, // Automatically handle HTTP errors (4xx, 5xx)
        ]);

        $response = curl_exec($curl);

        if (curl_errno($curl)) {
            // Handle CURL errors
            $error = curl_error($curl);
            error_log("CURL Error: $error");
            curl_close($curl);
            return null;
        }

        $httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        curl_close($curl);

        // Validate HTTP response code
        if ($httpCode !== 200) {
            error_log("MindBody API Error (HTTP $httpCode): $response");
            return null;
        }

        // Decode JSON response
        $decodedResponse = json_decode($response, true);
        if (json_last_error() !== JSON_ERROR_NONE) {
            error_log("JSON Decode Error: " . json_last_error_msg());
            return null;
        }

        return $decodedResponse;
    }

    /**
     * Fetches client information from the MindBody API.
     *
     * @param string $clientId The ID of the client.
     * @return array|null Client information or null if not found or on error.
     */
    public function getClientInfo(string $clientId): ?array
    {
        $url = "https://api.mindbodyonline.com/public/v6/client/client";
        $params = ['clientId' => $clientId];

        $response = $this->executeRequest($url, $params);
        var_dump($response);

        return $response['Client'] ?? null;
    }
}
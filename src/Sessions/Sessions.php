<?php

namespace SlimCD\Sessions;

use SlimCD\SlimCD;

/**
 * Class Sessions
 * @package SlimCD\Sessions
 */
class Sessions extends SlimCD implements \SlimCD\Interfaces\Sessions
{
    /**
     * @param CancelSessionRequest $request
     * @param bool $timeout
     * @return mixed|object
     */
    public function cancelSession(CancelSessionRequest $request, $timeout = false)
    {
        $timeout = $this->getTimeout($timeout);
        return ($this->httpPost($this->statsURL . "/soft/json/jsonscript.asp?service=CancelSession", $timeout, $request->jsonSerialize()));
    }

    /**
     * @param CheckSessionRequest $request
     * @param bool $timeout
     * @return mixed|object
     */
    public function checkSession(CheckSessionRequest $request, $timeout = false)
    {
        $timeout = $this->getTimeout($timeout);
        return ($this->httpPost($this->statsURL . "/soft/json/jsonscript.asp?service=CheckSession", $timeout, $request->jsonSerialize()));
    }

    /**
     * @param CreateSessionRequest $request
     * @param bool $timeout
     * @return mixed|object
     */
    public function createSession(CreateSessionRequest $request, $timeout = false)
    {
        $timeout = $this->getTimeout($timeout);
        return ($this->httpPost($this->statsURL . "/soft/json/jsonscript.asp?service=CreateSession", $timeout, $request->jsonSerialize()));
    }

    /**
     * @param DestroySessionsRequest $request
     * @param bool $timeout
     * @return mixed|object
     */
    public function destroySessions(DestroySessionsRequest $request, $timeout = false)
    {
        $timeout = $this->getTimeout($timeout);
        return ($this->httpPost($this->statsURL . "/soft/json/jsonscript.asp?service=DestroySessions", $timeout, $request->jsonSerialize()));
    }

    /**
     * @param GetSessionFieldsRequest $request
     * @param bool $timeout
     * @return mixed|object
     */
    public function getSessionFields(GetSessionFieldsRequest $request, $timeout = false)
    {
        $timeout = $this->getTimeout($timeout);
        return ($this->httpPost($this->statsURL . "/soft/json/jsonscript.asp?service=GetSessionFields", $timeout, $request->jsonSerialize()));
    }

    /**
     * @param MultiSessionRequest $request
     * @return string
     */
    public function multiSession(MultiSessionRequest $request)
    {
        if ($request->amount == "") {
            return ($this->statsURL . "/soft/mulisession.asp?sessionid=" . urlencode($request->sessionid));
        } else {
            return ($this->statsURL . "/soft/mulisession.asp?sessionid=" . urlencode($request->sessionid) . "&amount=" . urlencode($request->amount));
        }
    }

    /**
     * @param SearchSessionsRequest $request
     * @param bool $timeout
     * @return mixed|object
     */
    public function searchSessions(SearchSessionsRequest $request, $timeout = false)
    {
        $timeout = $this->getTimeout($timeout);
        return ($this->httpPost($this->statsURL . "/soft/json/jsonscript.asp?service=SearchSessions", $timeout, $request->jsonSerialize()));
    }

    /**
     * @param SendSessionRequest $request
     * @param bool $timeout
     * @return mixed|object
     */
    public function sendSession(SendSessionRequest $request, $timeout = false)
    {
        $timeout = $this->getTimeout($timeout);
        return ($this->httpPost($this->statsURL . "/soft/json/jsonscript.asp?service=SendSession", $timeout, $request->jsonSerialize()));
    }

    /**
     * @param ShowSessionRequest $request
     * @return string
     */
    public function showSession(ShowSessionRequest $request)
    {
        return ($this->statsURL . "/soft/showsession.asp?sessionid=" . urlencode($request->sessionid));
    }

    /**
     * @param SpawnSessionsRequest $request
     * @param bool $timeout
     * @return mixed|object
     */
    public function spawnSessions(SpawnSessionsRequest $request, $timeout = false)
    {
        $timeout = $this->getTimeout($timeout);
        return ($this->httpPost($this->statsURL . "/soft/json/jsonscript.asp?service=SpawnSessions", $timeout, $request->jsonSerialize()));
    }
}

<?php
error_reporting(-1);
class Service_Provider {
    /**
     * @param interge $uid
     * @param string $version
     * @return string
     */
    public function normal($uid, $version = "3.6") {
        return $version;
    }

    public function useragent($a, $b) {
        return $_SERVER['HTTP_USER_AGENT'];
    }

    public function headers($a, $b) {
        $headers = array(
            $_SERVER['HTTP_X_UNIQUE_ID'],
            $_SERVER['HTTP_X_TEST_NAME']
        );
        return $headers;
    }

    public function exception() {
        throw new Exception("server exceptin");
    }

    public function output() {
        echo "output";
        return "success";
    }

    protected function invisible() {
    }
}

$yar = new Yar_Server(new Service_Provider());
$yar->handle();

# NoAsAService SDK exists test

import pytest
from noasaservice_sdk import NoAsAServiceSDK


class TestExists:

    def test_should_create_test_sdk(self):
        testsdk = NoAsAServiceSDK.test(None, None)
        assert testsdk is not None

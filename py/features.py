# NoAsAService SDK feature factory

from feature.base_feature import NoAsAServiceBaseFeature
from feature.test_feature import NoAsAServiceTestFeature


def _make_feature(name):
    features = {
        "base": lambda: NoAsAServiceBaseFeature(),
        "test": lambda: NoAsAServiceTestFeature(),
    }
    factory = features.get(name)
    if factory is not None:
        return factory()
    return features["base"]()

# NoAsAService SDK configuration


def make_config():
    return {
        "main": {
            "name": "NoAsAService",
        },
        "feature": {
            "test": {
        "options": {
          "active": False,
        },
      },
        },
        "options": {
            "base": "https://naas.isalman.dev",
            "headers": {
        "content-type": "application/json",
      },
            "entity": {
                "non": {},
            },
        },
        "entity": {
      "non": {
        "fields": [],
        "name": "non",
        "op": {
          "load": {
            "input": "data",
            "name": "load",
            "points": [
              {
                "active": True,
                "args": {},
                "method": "GET",
                "orig": "/no",
                "parts": [
                  "no",
                ],
                "select": {},
                "transform": {
                  "req": "`reqdata`",
                  "res": "`body`",
                },
                "index$": 0,
              },
            ],
            "key$": "load",
          },
        },
        "relations": {
          "ancestors": [],
        },
      },
    },
    }


import { test, describe } from 'node:test'
import { equal } from 'node:assert'


import { NoAsAServiceSDK } from '..'


describe('exists', async () => {

  test('test-mode', () => {
    const testsdk = NoAsAServiceSDK.test()
    equal(testsdk instanceof NoAsAServiceSDK, true,
      'NoAsAServiceSDK.test() must return a client synchronously')
  })

})

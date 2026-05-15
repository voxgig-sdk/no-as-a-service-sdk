
import { test, describe } from 'node:test'
import { equal } from 'node:assert'


import { NoAsAServiceSDK } from '..'


describe('exists', async () => {

  test('test-mode', async () => {
    const testsdk = await NoAsAServiceSDK.test()
    equal(null !== testsdk, true)
  })

})

import { NonEntity } from './entity/NonEntity';
export type * from './NoAsAServiceTypes';
import { inspect } from 'node:util';
import type { Context, Feature } from './types';
import { config } from './Config';
import { NoAsAServiceEntityBase } from './NoAsAServiceEntityBase';
import { Utility } from './utility/Utility';
import { BaseFeature } from './feature/base/BaseFeature';
declare const stdutil: Utility;
type DirectResult = {
    ok: false;
    err: any;
    status?: undefined;
    headers?: undefined;
    data?: undefined;
} | {
    ok: boolean;
    status: number;
    headers: any;
    data: any;
    err?: any;
};
declare class NoAsAServiceSDK {
    _mode: string;
    _options: any;
    _utility: Utility;
    _features: Feature[];
    _rootctx: Context;
    constructor(options?: any);
    options(): any;
    utility(): any;
    prepare(fetchargs?: any): Promise<any>;
    direct(fetchargs?: any): Promise<DirectResult>;
    _rawRequest(fetchargs?: any): Promise<DirectResult>;
    graphql(query: string, variables?: any, ctrl?: any): Promise<any>;
    Non(entopts?: Record<string, any>): NonEntity;
    static test(testoptsarg?: any, sdkoptsarg?: any): NoAsAServiceSDK;
    tester(testopts?: any, sdkopts?: any): NoAsAServiceSDK;
    toJSON(): {
        name: string;
    };
    toString(): string;
    [inspect.custom](): string;
}
declare const SDK: typeof NoAsAServiceSDK;
export { stdutil, config, BaseFeature, NoAsAServiceEntityBase, NoAsAServiceSDK, SDK, };
export type { DirectResult };

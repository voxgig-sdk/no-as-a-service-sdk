import { NoAsAServiceEntityBase } from '../NoAsAServiceEntityBase';
import type { NoAsAServiceSDK } from '../NoAsAServiceSDK';
import type { Control } from '../types';
import type { Non, NonLoadMatch } from '../NoAsAServiceTypes';
declare class NonEntity extends NoAsAServiceEntityBase<Non> {
    constructor(client: NoAsAServiceSDK, entopts: any);
    make(this: NonEntity): NonEntity;
    load(this: any, reqmatch?: NonLoadMatch, ctrl?: Control): Promise<NonEntity>;
}
export { NonEntity };

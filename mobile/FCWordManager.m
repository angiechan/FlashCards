//
//  FCWordManager.m
//  FlashCards
//
//  Created by Yael Weinberg on 1/20/13.
//  Copyright (c) 2013 Yael Weinberg. All rights reserved.
//

#import "FCWordManager.h"

@implementation FCWordManager
@synthesize wordsBucket, knownWords;

-(id) init
{
    self = [super init];
    if (self)
    {
        wordsBucket = [[NSDictionary alloc] init];
        knownWords = [[NSDictionary alloc] init];
    }
    return self;
}

- (void) addWord:(NSString *)word
    WithSentence:(NSString *) sentence
          AndDef:(NSString *) def
{
    
}
- (void) incWordScore:(NSString *)word
{
    
}
@end

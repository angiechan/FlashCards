//
//  FCWordManager.h
//  FlashCards
//
//  Created by Yael Weinberg on 1/20/13.
//  Copyright (c) 2013 Yael Weinberg. All rights reserved.
//

#import <Foundation/Foundation.h>

@interface FCWordManager : NSObject

@property (strong, nonatomic) NSDictionary *wordsBucket;
@property (strong, nonatomic) NSDictionary *knownWords;


- (id) init;
- (void) addWord:(NSString *)word
    WithSentence:(NSString *) sentence
          AndDef:(NSString *) def;
- (void) incWordScore:(NSString *)word;

@end

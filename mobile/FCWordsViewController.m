//
//  FCWordsViewController.m
//  FlashCards
//
//  Created by Yael Weinberg on 1/19/13.
//  Copyright (c) 2013 Yael Weinberg. All rights reserved.
//

#import "FCWordsViewController.h"

@interface FCWordsViewController ()

@end

@implementation FCWordsViewController
@synthesize wordManager;

- (id)initWithNibName:(NSString *)nibNameOrNil bundle:(NSBundle *)nibBundleOrNil
{
    self = [super initWithNibName:nibNameOrNil bundle:nibBundleOrNil];
    if (self) {
        UITabBarItem *tbi = [self tabBarItem];
        [tbi setTitle:@"Words"];
        UIImage *i = [UIImage imageNamed:@"spirall.png"];
        [tbi setImage:i];
    }
    return self;
}

- (void)viewDidLoad
{
    [super viewDidLoad];
    // Do any additional setup after loading the view from its nib.
    [self reloadText];
}

- (void)didReceiveMemoryWarning
{
    [super didReceiveMemoryWarning];
    // Dispose of any resources that can be recreated.
}

- (void) reloadText
{
    if([wordManager isEmpty])
        return;
    [word setText:[wordManager getNextWord]];
    [definition setText:[wordManager getNextDef]];
    [sentence setText:[wordManager getNextSentence]];
}

- (IBAction)correct:(id)sender
{
    [wordManager incWordScore:[word text]];
    [wordManager incCounter];
    [self reloadText];
}

- (IBAction)wrong:(id)sender
{
    [wordManager incCounter];
    [self reloadText];
}
@end

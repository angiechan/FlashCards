//
//  FCAddViewController.m
//  FlashCards
//
//  Created by Yael Weinberg on 1/19/13.
//  Copyright (c) 2013 Yael Weinberg. All rights reserved.
//

#import "FCAddViewController.h"
#import <Parse/Parse.h>

@interface FCAddViewController ()

@end

@implementation FCAddViewController

- (id)initWithNibName:(NSString *)nibNameOrNil bundle:(NSBundle *)nibBundleOrNil
{
    self = [super initWithNibName:nibNameOrNil bundle:nibBundleOrNil];
    if (self) {
        UITabBarItem *tbi = [self tabBarItem];
        [tbi setTitle:@"Add"];
        UIImage *i = [UIImage imageNamed:@"spirall.png"];
        [tbi setImage:i];
    }
    return self;
}

- (void)viewDidLoad
{
    [super viewDidLoad];
    // Do any additional setup after loading the view from its nib.
}

- (void)didReceiveMemoryWarning
{
    [super didReceiveMemoryWarning];
    // Dispose of any resources that can be recreated.
}


- (IBAction) add:(id)sender
{
    PFUser *currentUser = [PFUser currentUser];
    NSString *userName = @"";
    if(currentUser)
        userName = [currentUser username];
    PFObject *qa = [PFObject objectWithClassName:@"Word"];
    [qa setObject:[word text] forKey:@"word"];
    [qa setObject:[def text] forKey:@"def"];
    [qa setObject:[sentence text] forKey:@"sentence"];
    [qa setObject:[NSNumber numberWithInt:0] forKey:@"correctAnswer"];
    [qa setObject:userName forKey:@"byUser"];
    [qa saveInBackground];
    [self clear:self];
    
}
- (IBAction) clear:(id)sender
{
    [word setText:@""];
    [def setText:@""];
    [sentence setText:@""];
    
    NSString *urlAddress = @"https://www.google.com";
    urlAddress = [urlAddress stringByAppendingString:[word text]];
    NSURL *url = [NSURL URLWithString:urlAddress];
	//URL Requst Object
	NSURLRequest *requestObj = [NSURLRequest requestWithURL:url];
	
	//Load the request in the UIWebView.
	[webView loadRequest:requestObj];

}
- (IBAction) hint:(id)sender
{
    NSString *urlAddress;
    if([[word text] isEqualToString:@""])
    {
        urlAddress = @"https://www.google.com";
    }
    else
    {
        urlAddress = @"https://www.google.com/search?rlz=1C1CHFA_en__487__487&sugexp=chrome,mod=2&sourceid=chrome&ie=UTF-8&q=define+";
        urlAddress = [urlAddress stringByAppendingString:[word text]];
    }

	//Create a URL object.
	NSURL *url = [NSURL URLWithString:urlAddress];
	
	//URL Requst Object
	NSURLRequest *requestObj = [NSURLRequest requestWithURL:url];
	
	//Load the request in the UIWebView.
	[webView loadRequest:requestObj];
}
@end

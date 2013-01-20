//
//  FCAddViewController.h
//  FlashCards
//
//  Created by Yael Weinberg on 1/19/13.
//  Copyright (c) 2013 Yael Weinberg. All rights reserved.
//

#import <UIKit/UIKit.h>

@interface FCAddViewController : UIViewController
<UITextFieldDelegate>
{
    IBOutlet UITextField *word;
    IBOutlet UITextField *def;
    IBOutlet UITextField *sentence;
    IBOutlet UIWebView *webView;
}

- (IBAction) add:(id)sender;
- (IBAction) clear:(id)sender;
- (IBAction) hint:(id)sender;
@end

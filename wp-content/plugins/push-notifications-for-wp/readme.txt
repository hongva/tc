=== Plugin Name ===
Contributors: delitestudio
Tags: push notifications, push notification, push, notifications, notification, mobile push, wordpress push, mobile notifications, mobile app, wordpress app, wordpress android app, wordpress ios app, ios app, ipad app, iphone app
Requires at least: 3.5
Tested up to: 4.4
Stable tag: 2.1
License: GPLv3
License URI: http://www.gnu.org/licenses/gpl-3.0.html

Send push notifications to iOS, Android, and Fire OS devices when you publish a new post. Without paying fees as it does not use third-party servers.

== Description ==

Send push notifications to iOS, Android, and Fire OS devices when you publish a new post. Straight from your WordPress site, in real-time.

> This plugin has a built in hub, allowing WordPress to send out the push notifications directly. It simply **can't** happen what happened with Parse.com--which disappear overnight.

Alert your visitors when new content is published, converting them to regular and loyal readers. It’s like a newsletter, but so much more effective. Keep your audience engaged.

Push Notifications for WordPress (Lite) allows you to focus on building beautiful and unique apps, without developing your own server-side back-end. Content for the apps is collected automatically from your WordPress site, so no extra work is needed to maintain them.

With Push Notifications for WordPress (Lite) you can send, for each post, a maximum of 1,000 notifications per platform (e.g. 1,000 for iOS, + 1,000 for Android, + 1,000 for Fire OS).

> Push Notifications for WordPress (Lite) is our basic solution for small personal blogs. We also offer a full-featured plugin with a reduced memory footprint and unlimited notifications, [Push Notifications for WordPress](http://www.delitestudio.com/wordpress/push-notifications-for-wordpress/), designed for all the other websites. If you’re not sure which plugin is right for you, compare the features [here](http://www.delitestudio.com/wordpress/push-notifications-for-wordpress/what-are-the-differences-between-push-notifications-for-wordpress-and-push-notifications-for-posts/).

https://www.youtube.com/watch?v=Mt7I72UzoSY&rel=0

= Key Features =

Push Notifications for WordPress (Lite) natively supports:

* Apple Push Notification service (APNs)
* Google Cloud Messaging (GCM)
* Amazon Device Messaging (ADM)

> Safari Notifications are supported only by the premium [Push Notifications for WordPress](http://www.delitestudio.com/wordpress/push-notifications-for-wordpress/).

**No charge for delivery.** You don’t have to pay any fees since Push Notifications for WordPress (Lite) does not use any third-party’s server.

**Instant notifications.** Notifications appear as message alerts, badge updates, and even sound alerts.

**Powerful APIs.** Provides easy to use REST APIs, available via HTTP. Send and receive data using the simple JSON standard. More info [here](http://www.delitestudio.com/wordpress/push-notifications-for-wordpress/documentation/).

**Allow users to receive notifications of their choice.** If you want, users can choose the categories of post of which receive push notifications. People are busy and do not like to have their time wasted. And when you do that you’re likely to lose that subscriber.

**Optional support for OAuth.** Any request sent to the API that are not properly signed will be denied.

**Android and iOS libraries.** Save hours of work by using our [Android](http://www.delitestudio.com/wordpress/push-notifications-for-wordpress/push-notifications-library-for-android/) and [iOS](http://www.delitestudio.com/wordpress/push-notifications-for-wordpress/push-notifications-library-for-ios/) libraries in your apps.

**Works with native apps, Cordova, Ionic, PhoneGap, and more frameworks.** Build beautiful and interactive mobile apps using your preferred technology. We suggest [WordPress Hybrid Client](http://wphc.julienrenaux.fr) to build amazing applications effortless.

**Localization ready.** Thanks to the presence of the POT (Portable Object Template) file, it’s really easy for you to provide your own translation files, with English and Italian translation out of the box.

> WPML is supported only by the premium [Push Notifications for WordPress](http://www.delitestudio.com/wordpress/push-notifications-for-wordpress/).

= Additional Information =

Push Notifications for WordPress (Lite) works exactly as you’d expect:

* Publishing a post **will** trigger push notifications.
* Saving a post as a draft **will not** trigger push notifications.
* Publishing a private post **will not** trigger push notifications.
* Static pages **will not** trigger push notifications.
* Scheduled posts **will** trigger push notifications at the time they’re scheduled to publish.

> Custom post types are supported only by the premium [Push Notifications for WordPress](http://www.delitestudio.com/wordpress/push-notifications-for-wordpress/).

= Who Is This Plugin For? =

This plugin is primarily intended for mobile developers who do not want to develop their server-side back-end. Supporting push notifications is incredibly complicated. This plugin lets you focus on creating the apps, without the hassle.

= Can You Build The Apps For Me? =

Yes. We’re a team of mobile developers. We created native [Android](http://www.delitestudio.com/wordpress/push-notifications-for-wordpress/push-notifications-library-for-android/) and [iOS](http://www.delitestudio.com/wordpress/push-notifications-for-wordpress/push-notifications-library-for-ios/) libraries, and we put our expertise to work on custom projects for companies that need great apps. Interested? [Contact us](http://www.delitestudio.com/contact/).

= Getting Started =

1. Build your iOS, Android, and/or Fire OS apps. Being a mobile developer, you should know how to do that (or use our [Android](http://www.delitestudio.com/wordpress/push-notifications-for-wordpress/push-notifications-library-for-android/) and [iOS](http://www.delitestudio.com/wordpress/push-notifications-for-wordpress/push-notifications-library-for-ios/) libraries, or [request a quote from our team](http://www.delitestudio.com/contact/)).
2. Install this plugin on your WordPress site.
3. Change the WordPress permalink structure (Settings → Permalinks) from "default" to one of the so-called "pretty" permalinks.
4. Enable push notifications on the plugin's settings page (providing required certificates and keys).
5. Connect the apps to your WordPress site using the included APIs. More info [here](http://www.delitestudio.com/wordpress/push-notifications-for-wordpress/documentation/).

Now, when users launch the apps, their devices will automatically register to your site. As soon as a new post is published, a push notification is sent to registered devices, with the title of the post.

= Detailed documentation =

You can find detailed documentation on the [official website](http://www.delitestudio.com/wordpress/push-notifications-for-wordpress/documentation/).

> The documentation refers to the premium version. Not everything is applicable to the free version. Compare the features [here](http://www.delitestudio.com/wordpress/push-notifications-for-wordpress/what-are-the-differences-between-push-notifications-for-wordpress-and-push-notifications-for-posts/).

= Uninstall Push Notifications for WordPress (Lite) =

If you deactivate and delete Push Notifications for WordPress (Lite), we leave data created by the plugin. Although WordPress will tell you that we do remove data on uninstall, we don’t.

If you need to remove ALL Push Notifications for WordPress (Lite) data, including tokens, users, and settings, go to: Push Notifications → Settings → Misc, and enable "Remove data on uninstall". Then when you deactivate and delete the plugin from the WordPress plugin admin, it will delete all data.

= Support =

The Delite Studio team does not provide support for the Push Notifications for WordPress (Lite) plugin on the WordPress.org forums. Ticket support is available to people who bought the premium plugin only. Note that the premium [Push Notifications for WordPress](http://www.delitestudio.com/wordpress/push-notifications-for-wordpress/) has several extra features too, so it might be well worth your investment!

== Installation ==

This section describes how to install the plugin and get it working.

1. Upload `push-notifications-for-wp` folder to the `/wp-content/plugins/` directory
2. Activate Push Notifications for WordPress (Lite) through the 'Plugins' menu in WordPress
3. Configure the plugin by going to the Push Notifications menu that appears in your admin menu

== Frequently Asked Questions ==

> Full FAQs on the [premium plugin's page](http://www.delitestudio.com/wordpress/push-notifications-for-wordpress/faqs/).

== Screenshots ==

1. The settings page.
2. An example of push notification received on an iOS device.
3. An example of push notification received on an Android device.
4. The Push Notifications widget on Add New Post page.
5. The Tokens page.
6. The OAuth page (with OAuth disabled).
7. The OAuth page (with OAuth enabled).

== Changelog ==

= 2.1 =
* New support to WordPress localization system.
* Other bug fixes and general improvements.

= 2.0 =
* Aligned version number with Premium version which now supports Safari desktop notifications on OS X.
* New OAuth option to accept both HTTP and HTTPS requests (useful when you migrate your site from HTTP to HTTPS).
* New step by step documentation to generate iOS certificates.
* Other bug fixes and general improvements.

= 1.7.1 =
* Bug fix on Feedback Provider.

= 1.7 =
* Fixed an inaccuracy that could give problems with OAuth in case the home URL was different from the site URL (where the WordPress core files reside).

= 1.6 =
* Full support for WordPress 4.4.
* Now shows the expiration of the iOS push notifications SSL certificate.
* First support for WP REST API v2 for the read/unread state of posts.

= 1.5 =
* The timestamp shown in the Debug page comply with the format chosen by the user in the WordPress settings page.
* Other bug fixes and general improvements.

= 1.4 =
* New option to customise notification sound for iOS apps.
* New API to set the flag read/unread of a post.
* New option to disable email verification.
* Now manages the users already registered with different roles without returning "Email already exists".
* Updated internal libraries.

= 1.3 =
* Changed the sender's name in the activation emails.
* Full parameters validation.
* Older PHP version fix.
* Minor bug fixes.

= 1.2 =
* Full support for WordPress 4.3.
* New logs, also for APIs, more frequent and detailed.
* Minor bug fixes.

= 1.1.1 =
* Minor bug fixes.

= 1.1 =
* Option to support Apache Cordova with PushPlugin.

= 1.0 =
* First public release.

== Upgrade Notice ==

== Prerequisites ==

Push Notifications for WordPress (Lite) requires:

* WordPress 3.5 or later with “pretty” permalinks.
* PHP 5.3 or later.
* Inbound and outbound TCP packets over ports 2195 and 2196 (for iOS notifications).
* PHP’s cURL support (for Android and Kindle notifications).

To begin using this plugin, you first need an app that uses one of the supported push notification services: APNs (Apple Push Notification service), GCM (Google Cloud Messaging), or ADM (Amazon Device Messaging).

To send push notifications to iOS devices, you need the Apple Push Notification service SSL certificate in the .PEM format. For more information, see our [Configuring iOS Push Notifications](http://www.delitestudio.com/wordpress/push-notifications-for-wordpress/configuring-ios-push-notifications/) guide.

To send push notifications to Android devices, you need to obtain the Google API Key. For more information, see [GCM Architectural Overview](https://developers.google.com/mobile/add).

To send push notifications to Fire OS devices, you need to obtain the Client ID and Client Secret. For more information, see [Obtaining ADM Credentials](http://developer.amazon.com/sdk/adm/credentials.html).

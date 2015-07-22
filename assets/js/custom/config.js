var themeName = 'lasourisetlepiano-2013',
		jsFilePath = $('script[src*=scripts]').attr('src'), // the script.js path
		jsFolderPath = jsFilePath.substring(0, jsFilePath.lastIndexOf('/')) + '/', // the js folder path
		wpDirectory = jsFolderPath.replace('wp-content/themes/' + themeName + '/assets/js/',''), //wordpress directory
		homeUrl = wpDirectory.replace('wp/',''), //wordpress directory
		cssFolder = jsFolderPath.replace('js/', 'css/'), //css folder
		imageFolder = jsFolderPath.replace('js/', 'img/'); //images folder
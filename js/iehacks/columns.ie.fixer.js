$(function() { // document ready!

	$('.column-article:nth-child(n)').addClass('article-nth-child-n');
	$('.column-article:nth-child(2n)').addClass('article-nth-child-2n');
	$('.column-article:nth-child(2n+1)').addClass('article-nth-child-2np1');
	$('.column-article:nth-child(3n)').addClass('article-nth-child-3n');
	$('.column-article:nth-child(3n+1)').addClass('article-nth-child-3np1');
	$('.column-article:nth-child(4n)').addClass('article-nth-child-4n');

	$('.column-about:nth-child(n)').addClass('about-nth-child-n');
	$('.column-about:nth-child(2n)').addClass('about-nth-child-2n');

	$('.column-hobby:nth-child(n)').addClass('hobby-nth-child-n');
	$('.column-hobby:nth-child(2n)').addClass('hobby-nth-child-3n');

	$('.project:nth-child(2n)').addClass('project-nth-child-2n');

	$('.quote:nth-child(n)').addClass('quote-nth-child-n');
	$('.quote:nth-child(2n)').addClass('quote-nth-child-2n');
	$('.quote:nth-child(4n)').addClass('quote-nth-child-4n');

}); // end jQuery ready
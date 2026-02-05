# SEO Implementation Guide

## Overview
This Laravel project now includes comprehensive SEO optimization features to improve search engine visibility and organic traffic.

## Components Added

### 1. **SEO Service** (`app/Services/SeoService.php`)
A service class for managing meta tags, Open Graph, and Twitter Card data.

#### Usage:
```php
use App\Services\SeoService;

$seo = new SeoService();
$seo->setTitle('Product Name')
     ->setDescription('Product description for meta tags')
     ->setKeywords(['product', 'marketplace', 'shop'])
     ->setImage(asset('path/to/image.jpg'))
     ->setCanonical(url('product-url'));

return view('product', ['seo' => $seo]);
```

### 2. **SEO Configuration** (`config/seo.php`)
Global SEO settings for your application.

### 3. **Sitemap** (`/sitemap.xml`)
Automatically generated XML sitemap for search engine crawlers.

**Routes:**
- `/sitemap.xml` - Main sitemap
- `/sitemap/products.xml` - Products sitemap
- `/sitemap/events.xml` - Events sitemap

### 4. **Robots.txt** (`/robots.txt`)
Configured to:
- Allow crawling of public pages
- Disallow admin, login, and API routes
- Link to sitemap

### 5. **Database Fields**
Added to `products` and `events` tables:
- `meta_title` - Custom page title
- `meta_description` - Meta description (max 160 chars)
- `meta_keywords` - Keywords for SEO

## Implementation Steps

### Step 1: Run Database Migration
```bash
php artisan migrate
```

### Step 2: Update Your Controllers
Add SEO data when rendering views:

```php
<?php

namespace App\Http\Controllers;

use App\Services\SeoService;
use App\Models\Product;

class ProductController extends Controller
{
    public function show(Product $product)
    {
        $seo = new SeoService();
        $seo->setTitle($product->meta_title ?? $product->title)
             ->setDescription($product->meta_description ?? $product->description)
             ->setKeywords($product->meta_keywords)
             ->setImage(asset($product->photo))
             ->setCanonical(url('products/' . $product->id));

        return view('product.show', compact('product', 'seo'));
    }
}
```

### Step 3: Verify Layout Includes SEO
Your layout file already includes support for SEO tags:

```blade
@if(isset($seo))
    {!! $seo->render() !!}
@endif
```

## Best Practices

### 1. **Page Titles**
- Keep between 50-60 characters
- Include primary keyword
- Make it descriptive and engaging
- Format: "Primary Keyword - Brand Name"

### 2. **Meta Descriptions**
- Keep between 150-160 characters
- Include primary and secondary keywords
- Include a call-to-action when appropriate
- Make it compelling for click-through

### 3. **Keywords**
- Research relevant keywords for each page
- Avoid keyword stuffing
- Focus on 3-5 main keywords per page

### 4. **Content Structure**
- Use semantic HTML (h1, h2, h3)
- One H1 per page
- Use descriptive heading text

### 5. **Images**
- Add descriptive alt text to all images
- Use proper filename conventions (use-hyphens-not-underscores)
- Optimize image sizes (compress images)

### 6. **URL Structure**
- Use slug fields for clean URLs
- Include keywords in URLs
- Use hyphens to separate words
- Keep URLs short and descriptive

## Example: Complete Page Implementation

```blade
<!-- resources/views/products/show.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $product->title }}</h1>
    <p>{{ $product->description }}</p>
    
    <!-- Open Graph Meta Tags will be automatically added from SeoService -->
</div>
@endsection
```

```php
// Controller
public function show($id)
{
    $product = Product::findOrFail($id);
    
    $seo = new SeoService();
    $seo->setTitle($product->meta_title ?: $product->title)
         ->setDescription($product->meta_description ?: substr($product->description, 0, 160))
         ->setKeywords($product->meta_keywords)
         ->setImage(asset($product->photo))
         ->setCanonical(route('products.show', $product->id));
    
    return view('products.show', compact('product', 'seo'));
}
```

## Monitoring & Improvement

### Tools to Use:
1. **Google Search Console** - Monitor crawl statistics and search performance
2. **Google PageSpeed Insights** - Test page speed and mobile friendliness
3. **Bing Webmaster Tools** - Submit sitemaps and monitor indexing
4. **Schema.org Markup** - Add structured data for better SERP appearance
5. **Google Analytics** - Track organic traffic and user behavior

### Regular Tasks:
- Monitor search console for errors
- Check keyword rankings monthly
- Update meta tags based on content changes
- Test mobile responsiveness
- Optimize page load speed
- Build quality backlinks

## Schema Markup (Optional Enhancement)

Add structured data for better search results:

```php
// Example: Product schema
$schema = [
    '@context' => 'https://schema.org/',
    '@type' => 'Product',
    'name' => $product->title,
    'description' => $product->description,
    'image' => asset($product->photo),
    'offers' => [
        '@type' => 'Offer',
        'price' => $product->price,
        'priceCurrency' => 'CAD',
        'availability' => 'https://schema.org/InStock'
    ]
];
```

## Common Issues & Solutions

### Sitemap not generating?
- Check that routes are properly registered
- Verify database has products/events

### Meta tags not showing?
- Ensure `$seo` variable is passed to view
- Check that layout includes SEO rendering

### Sitemap not indexed?
- Submit sitemap to Google Search Console
- Check robots.txt allows crawling

---

For questions or more advanced SEO implementations, consult:
- [Laravel SEO Best Practices](https://laravel.com/)
- [Google Search Central](https://search.google.com/search-console)
- [SEO Starter Guide](https://developers.google.com/search/docs)

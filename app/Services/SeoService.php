<?php

namespace App\Services;

class SeoService
{
    private array $meta = [];

    public function __construct()
    {
        $this->setDefaults();
    }

    /**
     * Set default meta tags
     */
    private function setDefaults(): void
    {
        $this->meta = [
            'title' => config('app.name', 'Canada Project'),
            'description' => 'Your marketplace and events platform',
            'keywords' => 'marketplace, events, products',
            'image' => asset('images/og-image.jpg'),
            'url' => url()->current(),
        ];
    }

    /**
     * Set page title
     */
    public function setTitle(string $title): self
    {
        $this->meta['title'] = $title . ' | ' . config('app.name', 'Canada Project');
        return $this;
    }

    /**
     * Set meta description
     */
    public function setDescription(string $description): self
    {
        $this->meta['description'] = substr($description, 0, 160);
        return $this;
    }

    /**
     * Set keywords
     */
    public function setKeywords(string|array $keywords): self
    {
        if (is_array($keywords)) {
            $keywords = implode(', ', $keywords);
        }
        $this->meta['keywords'] = $keywords;
        return $this;
    }

    /**
     * Set OG image
     */
    public function setImage(string $image): self
    {
        $this->meta['image'] = $image;
        return $this;
    }

    /**
     * Set canonical URL
     */
    public function setCanonical(string $url): self
    {
        $this->meta['canonical'] = $url;
        return $this;
    }

    /**
     * Get all meta tags
     */
    public function getMeta(): array
    {
        return $this->meta;
    }

    /**
     * Render meta tags as HTML
     */
    public function render(): string
    {
        $html = '';
        $html .= '<title>' . htmlspecialchars($this->meta['title']) . '</title>' . PHP_EOL;
        $html .= '<meta name="description" content="' . htmlspecialchars($this->meta['description']) . '">' . PHP_EOL;
        $html .= '<meta name="keywords" content="' . htmlspecialchars($this->meta['keywords']) . '">' . PHP_EOL;
        
        // Open Graph
        $html .= '<meta property="og:title" content="' . htmlspecialchars($this->meta['title']) . '">' . PHP_EOL;
        $html .= '<meta property="og:description" content="' . htmlspecialchars($this->meta['description']) . '">' . PHP_EOL;
        $html .= '<meta property="og:image" content="' . htmlspecialchars($this->meta['image']) . '">' . PHP_EOL;
        $html .= '<meta property="og:url" content="' . htmlspecialchars($this->meta['url'] ?? url()->current()) . '">' . PHP_EOL;
        $html .= '<meta property="og:type" content="website">' . PHP_EOL;
        
        // Twitter Card
        $html .= '<meta name="twitter:card" content="summary_large_image">' . PHP_EOL;
        $html .= '<meta name="twitter:title" content="' . htmlspecialchars($this->meta['title']) . '">' . PHP_EOL;
        $html .= '<meta name="twitter:description" content="' . htmlspecialchars($this->meta['description']) . '">' . PHP_EOL;
        $html .= '<meta name="twitter:image" content="' . htmlspecialchars($this->meta['image']) . '">' . PHP_EOL;
        
        // Canonical
        if (isset($this->meta['canonical'])) {
            $html .= '<link rel="canonical" href="' . htmlspecialchars($this->meta['canonical']) . '">' . PHP_EOL;
        }
        
        return $html;
    }
}

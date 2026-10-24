<?php

namespace Tests\Feature;

use Tests\TestCase;

class NavbarNavigationTest extends TestCase
{
    public function test_home_page_links_to_each_navigation_page(): void
    {
        $response = $this->get(route('home'));

        $response->assertSee('href="'.route('home').'"', false);
        $response->assertSee('href="'.route('services.index').'"', false);
        $response->assertSee('href="'.route('about').'"', false);
        $response->assertSee('href="'.route('contact').'"', false);
        $response->assertSee('Sepatu Bersih,');
    }

    public function test_about_and_contact_links_open_distinct_pages(): void
    {
        $this->get(route('about'))
            ->assertSee('Tentang EnyaShoeCare')
            ->assertSee('Tentang Kami')
            ->assertSee('Kenali material')
            ->assertSee('images/services/leather-care.jpg');

        $this->get(route('contact'))
            ->assertSee('Kontak EnyaShoeCare')
            ->assertSee('Hubungi Kami')
            ->assertSee('Lihat informasi kontak')
            ->assertSee('images/services/fast-clean.jpg');
    }

    public function test_services_link_opens_the_service_catalog(): void
    {
        $this->get(route('services.index'))
            ->assertSee('Layanan EnyaShoeCare')
            ->assertSee('Daftar Layanan');
    }

    public function test_home_page_displays_local_shoe_photos_in_premium_hero_and_gallery(): void
    {
        $this->get(route('home'))
            ->assertSee('Premium Shoe Care')
            ->assertSee('Sepatu Bersih,')
            ->assertSee('images/services/deep-clean.jpg')
            ->assertSee('images/services/repaint.jpg')
            ->assertSee('images/services/leather-care.jpg')
            ->assertSee('Rawat setiap pasang sepatu dengan tepat.');
    }

    public function test_contact_page_displays_contact_details_and_editable_placeholders(): void
    {
        $this->get(route('contact'))
            ->assertSee('href="tel:+6285770159694"', false)
            ->assertSee('0857 7015 9694')
            ->assertSee('href="https://wa.me/6285770159694"', false)
            ->assertSee('href="mailto:enyashoecare@gmail.com"', false)
            ->assertSee('enyashoecare@gmail.com')
            ->assertSee('Ganti dengan alamat lengkap usaha')
            ->assertSee('Ganti dengan hari dan jam operasional usaha')
            ->assertSee('Ganti dengan area layanan');
    }
}

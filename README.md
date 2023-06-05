# Kalite Sihirbazı API (Backend)

Bu proje küçük ve orta ölçekli işletmelerin Kalite faaliyetlerini ücretsiz olarak yönetebilmeleri amacıyla oluşturulmuştur. Sizi lisans ücretleri maliyetlerinden kurtarırken, işletmenizin ülke ekonomisine katkısını ve halkımızın erişeceği ürünlerin kalitesi azami düzeye çıkarılmasını sağlamak ana hedefidir.

>`Vatanını en çok seven görevini en iyi yapandır
`-Mustafa Kemal ATATÜRK`

## Gereksinimler

Bu projenin çalışması için aşağıdaki gereksinimlere ihtiyaç duyulmaktadır:

-   PHP 8.2
-   Composer
-   Laravel 10
-   MySQL, MariaDB veya PostgreSQL


## Kurulum

1. Bu projeyi klonlayın:

```shell
$ git clone https://github.com/kalite-sihirbazi/api.git
```

2. Proje dizinine gidin:

```shell
$ cd [proje adı]
```

3. Bağımlılıkları yükleyin:

```shell
$ composer install
```

4. `.env` dosyasını oluşturun ve gerekli ayarları yapın:

```shell
$ cp .env.example .env
$ php artisan key:generate
```

5. Veritabanını oluşturun ve güncelleyin:

```shell
$ php artisan migrate
$ php artisan db:seed
```

6. Sunucuyu başlatın:

```shell
$ php artisan serve
```

7. Tarayıcınızda `http://localhost:8000` adresine gidin ve uygulamayı görmelisiniz.

## Kullanım

Proje nasıl kullanılacağıyla ilgili talimatları buraya yazabilirsiniz. 

- Varsayılan Kullanıcı
    - __kullanıcı adı:__ *yonetici*
    - __şifre:__ *kalitesihirbazi*
2. Oturum açmak için `https://github.com/kalite-sihirbazi/pwa` projesini kurunuz.

## Katkıda Bulunma

Eğer bu projeye katkıda bulunmak isterseniz, lütfen aşağıdaki adımları takip edin:

1. Bu projeyi fork edin.
2. Yeni bir branch oluşturun: `git checkout -b feature/branch-adı`
3. Değişikliklerinizi yapın ve commit edin: `git commit -am 'Açıklama'`
4. Branch'inize push yapın: `git push origin feature/branch-adı`
5. Bir pull request açın.

## Lisans

Bu proje MIT lisansı altında dağıtılmaktadır. Daha fazla bilgi için `LICENSE` dosyasını inceleyin.

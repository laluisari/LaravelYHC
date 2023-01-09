-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Jan 2023 pada 00.54
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `santringoding`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Programming', 'programming', '2023-01-07 09:11:33', '2023-01-07 09:11:33'),
(2, 'sea', 'sea', '2023-01-07 09:11:33', '2023-01-07 09:11:33'),
(3, 'mountain', 'mountain', '2023-01-07 09:11:33', '2023-01-07 09:11:33');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'komputer', '2023-01-07 09:12:10', '2023-01-08 15:04:19'),
(2, 'desain', '2023-01-08 15:04:28', '2023-01-08 15:04:28'),
(3, 'jaringan', '2023-01-08 15:04:35', '2023-01-08 15:04:35');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswas`
--

CREATE TABLE `mahasiswas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nim` bigint(20) NOT NULL,
  `prodi_id` bigint(20) UNSIGNED NOT NULL,
  `semester_id` bigint(20) UNSIGNED NOT NULL,
  `kelas_id` bigint(20) UNSIGNED NOT NULL,
  `tahun_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `mahasiswas`
--

INSERT INTO `mahasiswas` (`id`, `nama`, `nim`, `prodi_id`, `semester_id`, `kelas_id`, `tahun_id`, `created_at`, `updated_at`) VALUES
(2, 'lalu isari attamimi', 205410066, 1, 1, 1, 1, '2023-01-07 10:27:44', '2023-01-07 10:27:44'),
(3, 'agus', 205410055, 1, 1, 1, 1, '2023-01-08 04:55:22', '2023-01-08 04:55:22'),
(4, 'baiq siti maulidia', 205410044, 2, 6, 2, 1, '2023-01-08 15:38:09', '2023-01-08 15:38:09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_07_11_234002_create_posts_table', 1),
(6, '2022_07_17_055123_create_categories_table', 1),
(7, '2022_08_10_052818_add_is_admin_to_users_table', 1),
(8, '2023_01_07_021247_create_mahasiswas_table', 1),
(9, '2023_01_07_050444_create_prodis_table', 1),
(10, '2023_01_07_071628_create_semesters_table', 1),
(11, '2023_01_07_095239_create_kelas_table', 1),
(12, '2023_01_07_111605_create_tahuns_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `category_id`, `title`, `slug`, `excerpt`, `image`, `content`, `created_at`, `updated_at`) VALUES
(1, 1, 3, 'Dolorem aut nostrum.', 'labore-officia-quod-non-soluta-dolorem-excepturi-optio-quo', 'Eum officia cupiditate et expedita. Esse dolorem dolore officia. Esse doloribus et minima doloremque magnam in qui.', NULL, '<p>Molestias voluptatem quos debitis adipisci aut consequatur magni. Esse impedit aliquid excepturi sed deserunt suscipit quisquam. Laborum voluptatem sequi odit omnis aut sed. Eaque consequatur ducimus aut molestiae.</p>', '2023-01-07 09:11:33', '2023-01-07 09:11:33'),
(2, 2, 3, 'Ipsa aut.', 'pariatur-aperiam-odio-dicta-fugit-sapiente', 'Quam repellendus libero perspiciatis iure et. Soluta officiis voluptate corrupti quibusdam vel ipsam. Sequi molestiae iure aut.', NULL, '<p>Voluptatem repellendus architecto non unde. Aut assumenda omnis eius repudiandae neque quo. Esse cupiditate modi neque atque iste magnam.</p>', '2023-01-07 09:11:33', '2023-01-07 09:11:33'),
(3, 2, 2, 'Qui ullam.', 'ab-amet-pariatur-laudantium-possimus-repudiandae-mollitia', 'Itaque quibusdam commodi eaque hic. Voluptas sit in dolor velit quis consequatur saepe. Dolore corrupti molestias laboriosam vel quo corporis non.', NULL, '<p>Et vel corporis doloribus aut quia non sint dolor. Architecto doloribus ipsum in deleniti tempora impedit.</p>', '2023-01-07 09:11:33', '2023-01-07 09:11:33'),
(4, 3, 3, 'Non consequuntur.', 'et-sunt-rem-sunt-qui-sit', 'Deleniti molestias ea quisquam repudiandae consectetur corrupti. Ducimus at amet quia ea qui ab soluta.', NULL, '<p>Odit non corporis impedit nostrum. Aut dolorum expedita assumenda dolorum cum mollitia architecto. Nisi tempore ut occaecati architecto exercitationem iste eius. Sed sed sunt aut facere autem enim. Nesciunt deserunt aut voluptatem. Qui aperiam ea qui ipsa eos aliquam. Voluptas enim a culpa et aperiam et perspiciatis quia.</p>', '2023-01-07 09:11:33', '2023-01-07 09:11:33'),
(5, 3, 3, 'Sit qui laborum.', 'provident-similique-occaecati-perferendis-incidunt', 'Atque voluptatibus ratione quis et quia. Rerum cumque voluptatem corrupti dolores explicabo esse voluptas. Aut officia ex recusandae esse voluptatem iste facilis.', NULL, '<p>Mollitia distinctio est nesciunt nam. Voluptatem corrupti nam minima fugit est ut quibusdam. Dignissimos et dolorum sequi. Rerum et iure perferendis et.</p>', '2023-01-07 09:11:33', '2023-01-07 09:11:33'),
(6, 3, 2, 'Voluptatem voluptatem quia.', 'ea-rerum-dolor-laudantium-praesentium-ab-debitis-temporibus', 'Laudantium est labore dolorem quas atque. Cumque iure maxime accusantium enim.', NULL, '<p>Est quis cum nisi qui voluptatem sint rerum. Dolorem doloribus optio rerum velit placeat numquam repellat. Libero voluptatem id ratione veritatis nobis error maiores. Earum sit reprehenderit quis ea ratione sequi asperiores. Adipisci facilis sed harum voluptas officiis.</p>', '2023-01-07 09:11:33', '2023-01-07 09:11:33'),
(7, 1, 3, 'Ducimus.', 'sequi-blanditiis-voluptate-sunt-iure', 'Qui laboriosam qui consequatur. At quisquam suscipit consectetur aut.', NULL, '<p>Beatae iure quia aut sit. Voluptas nihil ut adipisci ea facilis. Consequatur veniam similique veniam et. Vel et quaerat voluptatibus temporibus qui.</p>', '2023-01-07 09:11:33', '2023-01-07 09:11:33'),
(8, 3, 2, 'Sapiente neque.', 'itaque-cumque-temporibus-vero-error-quia-est', 'Voluptatem molestiae ullam nisi debitis explicabo consequatur. Rerum saepe amet et ex sit.', NULL, '<p>Eos explicabo optio omnis deserunt sint non et. Est ipsum esse autem aut maiores corporis. Et doloremque doloribus aut quia accusamus. Fuga voluptas sit totam recusandae necessitatibus. Expedita nihil beatae veritatis sit at. Eos accusamus voluptatum hic est aut minima sequi.</p>', '2023-01-07 09:11:33', '2023-01-07 09:11:33'),
(9, 3, 3, 'In.', 'assumenda-dolorum-quia-quidem-sunt', 'Ullam tenetur ipsum doloribus voluptates animi aut corporis molestiae. Qui qui officiis quod ut.', NULL, '<p>Praesentium eligendi aut corporis laborum tempora est cum. Aut qui maiores libero quidem dolor. Iusto iusto voluptates ratione consequatur qui saepe. Aut eveniet et ab soluta aliquid est. Eum fugiat qui culpa autem.</p>', '2023-01-07 09:11:33', '2023-01-07 09:11:33'),
(10, 3, 3, 'Voluptatem et.', 'dicta-saepe-nesciunt-esse-quod-aperiam', 'Qui enim commodi sit et. Dolor possimus est fugit enim odio exercitationem distinctio perferendis. Voluptatem officiis nisi laudantium facilis ut porro nemo.', NULL, '<p>Perferendis sit rem voluptatem rerum impedit asperiores iste excepturi. Error sint qui nulla error exercitationem et eaque. Qui laboriosam culpa amet repellat. Omnis molestiae aut omnis praesentium id est. Itaque commodi dolore vel qui iusto iusto. Est assumenda numquam consequatur aut impedit ea repellat.</p>', '2023-01-07 09:11:33', '2023-01-07 09:11:33'),
(11, 3, 2, 'Vitae in.', 'occaecati-cum-fugiat-adipisci-saepe-non', 'Sequi fugiat ducimus aut quia consequatur error est est. Dolorem eius est ad esse sequi et. Neque voluptas eos temporibus qui est.', NULL, '<p>Rerum et omnis impedit non. Aliquam id quae porro odio tempora architecto voluptatem. Sit illum eveniet quo perferendis. Saepe quo non quam in nemo. Dolores magnam consequuntur adipisci quam. Id ut laborum quo soluta.</p>', '2023-01-07 09:11:33', '2023-01-07 09:11:33'),
(12, 3, 1, 'Vel.', 'est-tempore-voluptatem-molestias-magnam', 'Ducimus voluptas dolor qui non amet illo. Sunt excepturi in magnam distinctio voluptas.', NULL, '<p>Odio voluptatem eos et vel repudiandae laboriosam. Fuga quisquam et nihil est repellendus voluptas voluptas officiis. Enim nulla blanditiis earum minus sit natus. Sapiente est velit cumque.</p>', '2023-01-07 09:11:33', '2023-01-07 09:11:33'),
(13, 2, 3, 'Quo at.', 'tempore-quisquam-qui-dolores-nihil-nam-veritatis-ut', 'Quisquam fuga ut qui nihil. Quis minima suscipit corporis iusto.', NULL, '<p>Est consequatur cum laboriosam mollitia quaerat ratione aliquid nihil. Vero et eum est. Quo dolor voluptatem et ipsum rem et. Architecto laudantium dicta et omnis laboriosam iste. Quos asperiores aut et praesentium incidunt doloremque. Provident enim totam quaerat vel animi dolores est.</p>', '2023-01-07 09:11:33', '2023-01-07 09:11:33'),
(14, 2, 3, 'Aut quisquam.', 'sed-commodi-consequatur-soluta-ex', 'Minus voluptatem cupiditate quos aperiam. Debitis debitis aut deleniti fugiat eaque.', NULL, '<p>In tenetur tempore ad est qui quod. Ex accusamus culpa doloribus vero laudantium. Nam eum unde ut voluptatem cumque. Consequatur dignissimos magni iusto illo ipsam exercitationem labore.</p>', '2023-01-07 09:11:33', '2023-01-07 09:11:33'),
(15, 2, 1, 'Cupiditate inventore.', 'et-ut-reiciendis-expedita-suscipit-vitae-beatae-sequi-ipsa', 'Ut magni ut vel quo. Quaerat pariatur maiores est ea.', NULL, '<p>Facere hic labore eius rerum cupiditate sed voluptate. Accusantium neque fuga aut dolores aut aspernatur atque vero. Dolorem itaque qui harum hic. Voluptatem fuga repellat autem sapiente quod ut ipsam.</p>', '2023-01-07 09:11:33', '2023-01-07 09:11:33'),
(16, 2, 3, 'Id.', 'voluptas-quia-dolor-eos-impedit-possimus-iure', 'Odit et soluta numquam error. Id voluptate et et ut non dolorem odit. Molestiae labore rerum aspernatur ut dolores ea rerum.', NULL, '<p>Aliquam enim harum dolorem. Eum quia expedita ut ipsa nam. Provident dolorum iste exercitationem ab ut asperiores consequuntur. Tempore ab qui quidem saepe ipsum totam qui. Dolor officiis a blanditiis odio totam. Consectetur facilis soluta deserunt qui magnam.</p>', '2023-01-07 09:11:33', '2023-01-07 09:11:33'),
(17, 2, 2, 'Laborum libero.', 'illo-quia-officiis-provident-esse', 'Perferendis quibusdam qui sunt aspernatur ut. Esse esse minus sequi praesentium quis. Velit est non ad est enim.', NULL, '<p>Ullam accusantium perspiciatis ducimus aut sequi porro quis voluptate. Nulla minus laborum deleniti assumenda deserunt error. Sit quaerat sit iste.</p>', '2023-01-07 09:11:33', '2023-01-07 09:11:33'),
(18, 2, 1, 'Voluptatem commodi et.', 'ipsum-perferendis-necessitatibus-et-qui-officiis', 'Mollitia qui delectus ut ut neque est. Facilis provident dolor corporis non ullam velit quia. At omnis temporibus et cum molestias.', NULL, '<p>Tempora ullam fuga quisquam quis accusantium et illum doloribus. Laborum eos numquam sit dolores eos porro. Consectetur nostrum sint ut molestias veniam unde in. Accusantium et temporibus qui nihil optio qui vero. Sed voluptatem deserunt commodi cupiditate possimus ex.</p>', '2023-01-07 09:11:33', '2023-01-07 09:11:33'),
(19, 3, 2, 'Aut a nisi.', 'voluptas-et-eum-odit-eius-rerum-est', 'Impedit qui omnis quia. Quo molestiae et nemo voluptate.', NULL, '<p>Quam consectetur dolores occaecati. Nobis nihil qui architecto nihil sit consequatur ea. Adipisci nostrum voluptatem eum ut dolore nisi quaerat.</p>', '2023-01-07 09:11:33', '2023-01-07 09:11:33'),
(20, 1, 3, 'Veritatis in voluptatum.', 'soluta-distinctio-ipsam-quia-maxime-atque-neque-adipisci', 'Quasi excepturi doloribus necessitatibus soluta molestias cum voluptatem omnis. Et eum qui quis porro rem pariatur corporis. Ea nihil illo eum sed.', NULL, '<p>Quibusdam assumenda provident adipisci necessitatibus ea minus blanditiis. Eveniet hic dolores ut tenetur cumque mollitia ut voluptates. Repellat adipisci neque id similique voluptas esse.</p>', '2023-01-07 09:11:33', '2023-01-07 09:11:33'),
(21, 3, 1, 'Sed autem eos.', 'cum-iure-necessitatibus-illum-delectus-tempore-repellendus-non-omnis', 'Culpa adipisci aperiam consequatur autem beatae quia est ut. Laudantium vel quisquam excepturi ad consequuntur a quod. Accusantium fugit laudantium qui porro fugit quidem qui.', NULL, '<p>Placeat sunt debitis quos. Ad quaerat ut et excepturi qui. Illo culpa accusamus quo tempore modi voluptatem repellendus. Aut repellendus qui debitis nam sunt aut laborum. Et sed aut aut inventore fugit et. Nulla nemo ut eos omnis. Provident exercitationem atque autem molestiae et.</p>', '2023-01-07 09:11:33', '2023-01-07 09:11:33'),
(22, 3, 2, 'Fuga.', 'optio-asperiores-est-omnis-cupiditate-vel-labore-voluptatem', 'Dolorum consequatur nihil sed molestias eaque esse. Exercitationem cupiditate odio aperiam animi. Velit dolorem pariatur quasi esse in.', NULL, '<p>Placeat aspernatur sequi vel laudantium hic facilis libero. Minima debitis dolorem aut maiores id. Quo et error officia et sint cupiditate eaque. A non exercitationem quod.</p>', '2023-01-07 09:11:33', '2023-01-07 09:11:33'),
(23, 2, 3, 'Illo sint.', 'magnam-tempore-quia-adipisci-dicta', 'Et sit voluptatem quia rerum aut sunt. Voluptas autem non quam eius vel repellat autem delectus. Explicabo ut qui quas ipsam id illo.', NULL, '<p>Doloremque sit natus cum est ratione. Quidem voluptatem aut et aperiam. Recusandae voluptatem unde et odit. Ut ut quia libero et dolores.</p>', '2023-01-07 09:11:33', '2023-01-07 09:11:33'),
(24, 3, 1, 'Rerum.', 'reprehenderit-assumenda-impedit-aut-ipsa-voluptatem-vel-ducimus', 'Vitae magni aut nulla eum voluptatem quod. A eum ullam et provident omnis qui. Earum ipsam nobis tempora totam provident.', NULL, '<p>Cum itaque necessitatibus placeat inventore. Quis distinctio omnis fugiat asperiores voluptatum unde fuga. Accusantium voluptatem nam dicta quia. Sequi et eveniet repellendus dolorem accusantium est voluptatibus. Ut qui quo fugit ut odit sunt quia.</p>', '2023-01-07 09:11:33', '2023-01-07 09:11:33'),
(25, 1, 2, 'Sit error.', 'voluptatem-qui-eos-perferendis-tempore-omnis-atque', 'Pariatur possimus fugiat nobis adipisci. Vel sed quisquam vel nisi omnis.', NULL, '<p>Sunt ut aperiam ab voluptate. Dolores voluptatem id et asperiores atque delectus et maxime. Sequi pariatur libero aperiam voluptatum sunt. Hic minima doloribus minus quisquam pariatur.</p>', '2023-01-07 09:11:33', '2023-01-07 09:11:33'),
(26, 3, 3, 'Explicabo.', 'illum-optio-ut-blanditiis-vero-delectus-qui-quidem', 'Repudiandae veritatis qui voluptatem qui. Omnis nam optio sunt sit accusamus sint ipsam.', NULL, '<p>Consequatur eos officiis eum adipisci placeat sint blanditiis quia. Officiis veniam et rem doloremque pariatur. Et rem ad maiores qui omnis amet et dolores. Sint iure voluptas deserunt nostrum. Rem nam consequatur voluptatibus fugiat sit.</p>', '2023-01-07 09:11:33', '2023-01-07 09:11:33'),
(27, 1, 2, 'Sit consectetur.', 'voluptatem-blanditiis-corrupti-laudantium-iste-nihil-unde-quasi-assumenda', 'Autem ullam ut velit. Exercitationem unde quis consequatur est sit quo explicabo. Amet nostrum repudiandae soluta iste.', NULL, '<p>Ut ut minima possimus dolorem. Voluptas et pariatur quia magni vel quia et. Eum velit eum tempora placeat nihil. Aperiam consequuntur et quaerat ratione aliquam omnis. Omnis blanditiis et ab voluptas modi similique.</p>', '2023-01-07 09:11:33', '2023-01-07 09:11:33'),
(28, 1, 1, 'Est ad quia.', 'deserunt-fuga-dolor-voluptates-labore-et-id-aliquam-consequuntur', 'Laborum et non saepe et id quia voluptatem delectus. Et voluptatum et rem eum doloremque. Alias dolorem et sint voluptas nihil et.', NULL, '<p>Sit nulla possimus earum sit voluptate veritatis et. Vel eveniet ex aut est harum voluptatem. Ullam vel et fuga voluptates sapiente eaque aut cum. Repellat laboriosam laborum vero aut veritatis vero nihil atque. Animi ad quo molestiae quo eaque suscipit.</p>', '2023-01-07 09:11:33', '2023-01-07 09:11:33'),
(29, 3, 3, 'Fugiat sint nam.', 'quo-aut-repellendus-vero-consequuntur-libero-explicabo-in', 'Aut accusantium reiciendis nostrum nemo porro. Accusantium placeat et quia expedita nesciunt ducimus. Sapiente possimus eaque enim.', NULL, '<p>Omnis praesentium error enim vitae et et. Dolorum iure incidunt voluptatem tempore velit itaque animi. Suscipit deserunt totam sed nemo. Beatae et sed enim iste consequuntur voluptas voluptatibus.</p>', '2023-01-07 09:11:33', '2023-01-07 09:11:33'),
(30, 2, 2, 'Animi voluptatibus.', 'et-officia-et-at-reprehenderit-quo', 'Qui quisquam sint odit ut dolorem sit culpa. Cum cupiditate tempora nihil.', NULL, '<p>Sunt cumque iure dolore nemo. Aut ratione eum neque unde. Cupiditate aut sit nisi debitis. Consectetur nobis incidunt possimus sapiente nihil ut.</p>', '2023-01-07 09:11:33', '2023-01-07 09:11:33');

-- --------------------------------------------------------

--
-- Struktur dari tabel `prodis`
--

CREATE TABLE `prodis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `prodis`
--

INSERT INTO `prodis` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'informatika', '2023-01-07 09:11:51', '2023-01-07 09:11:51'),
(2, 'desain', '2023-01-08 15:01:09', '2023-01-08 15:01:09'),
(3, 'jaringan', '2023-01-08 15:01:42', '2023-01-08 15:01:42');

-- --------------------------------------------------------

--
-- Struktur dari tabel `semesters`
--

CREATE TABLE `semesters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `semester` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `semesters`
--

INSERT INTO `semesters` (`id`, `semester`, `created_at`, `updated_at`) VALUES
(1, 1, '2023-01-07 09:11:59', '2023-01-07 09:11:59'),
(2, 2, '2023-01-08 15:01:55', '2023-01-08 15:01:55'),
(3, 3, '2023-01-08 15:03:11', '2023-01-08 15:03:11'),
(4, 4, '2023-01-08 15:03:17', '2023-01-08 15:03:17'),
(5, 5, '2023-01-08 15:03:27', '2023-01-08 15:03:27'),
(6, 6, '2023-01-08 15:03:32', '2023-01-08 15:03:32'),
(7, 7, '2023-01-08 15:03:40', '2023-01-08 15:03:40'),
(8, 8, '2023-01-08 15:03:48', '2023-01-08 15:03:48');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tahuns`
--

CREATE TABLE `tahuns` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tahun` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tahuns`
--

INSERT INTO `tahuns` (`id`, `tahun`, `created_at`, `updated_at`) VALUES
(1, 2020, '2023-01-07 09:12:19', '2023-01-07 09:12:19'),
(2, 2021, '2023-01-08 15:04:45', '2023-01-08 15:04:45'),
(3, 2022, '2023-01-08 15:04:50', '2023-01-08 15:04:50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `is_admin`) VALUES
(1, 'Cahyanto Kurniawan', 'nsihombing@example.net', 'hasim65', '2023-01-07 09:11:33', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '1lErHhUune', '2023-01-07 09:11:33', '2023-01-07 09:11:33', 0),
(2, 'Pia Rahmawati', 'usman41@example.org', 'pranawa66', '2023-01-07 09:11:33', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Nd5Vx893AV', '2023-01-07 09:11:33', '2023-01-07 09:11:33', 0),
(3, 'Lalu Isari ', 'laluisari@gmail.com', 'laluisari', NULL, '$2y$10$WhT3wW5X15kU89dUqJkSreB3f9wTGB61N5tAXQkQUF29J/jwSP9Nm', NULL, '2023-01-07 09:11:33', '2023-01-07 09:11:33', 0),
(4, 'mody', 'mody@gmail.com', 'modyMonyong', NULL, '$2y$10$MKlzQMlxPEP6SBZYoz6LOejCijgl51gRWGrxbXWiDgJxChFNJYlDi', NULL, '2023-01-07 23:18:55', '2023-01-07 23:18:55', 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mahasiswas`
--
ALTER TABLE `mahasiswas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `prodis`
--
ALTER TABLE `prodis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `semesters`
--
ALTER TABLE `semesters`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tahuns`
--
ALTER TABLE `tahuns`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `mahasiswas`
--
ALTER TABLE `mahasiswas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `prodis`
--
ALTER TABLE `prodis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `semesters`
--
ALTER TABLE `semesters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tahuns`
--
ALTER TABLE `tahuns`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

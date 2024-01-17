<?php

$texts = [
    'project.link'                                             => 'Progetto su GitHub',
    'project.log_in'                                           => 'Accedi',

    'error.not.installed.title'                                => 'Non installato',
    'error.not.installed.description'                          => 'Sembra che OPCache non sia installato.',
    'error.not.enabled.title'                                  => 'Non abilitato',
    'error.not.enabled.description'                            => 'Sembra che OPCache non sia abilitato.',

    'menu.status'                                              => 'Stato',
    'menu.config'                                              => 'Configurazione',
    'menu.scripts'                                             => 'Script nella cache',
    'menu.graphs'                                              => 'Grafici',

    'reset.submit'                                             => 'Azzera',
    'confirmation.reset'                                       => 'Sei sicuro di voler azzerare la cache?',
    'confirmation.yes'                                         => 'Sì',
    'confirmation.no'                                          => 'No',

    'status.title'                                             => 'Stato',
    'status.opcache_enabled'                                   => 'Abilitato',
    'status.cache_full'                                        => 'Cache satura',
    'status.restart_pending'                                   => 'Riavvio in attesa',
    'status.restart_in_progress'                               => 'Riavvio in corso',

    'memory.title'                                             => 'Utilizzo memoria',
    'memory.used_memory'                                       => 'Memoria utilizzata',
    'memory.free_memory'                                       => 'Memoria libera',
    'memory.wasted_memory'                                     => 'Memoria sprecata',
    'memory.current_wasted_percentage'                         => 'Memoria attualmente sprecata',

    'stats.title'                                              => 'Statistiche',
    'stats.num_cached_scripts'                                 => 'Tot. script nella cache',
    'stats.num_cached_keys'                                    => 'Tot. key nella cache',
    'stats.max_cached_keys'                                    => 'Tot. key consentite nella cache',
    'stats.hits'                                               => 'Successi',
    'stats.start_time'                                         => 'Data/ora di avvio',
    'stats.last_restart_time'                                  => 'Data/ora ultimo riavvio',
    'stats.oom_restarts'                                       => 'Tot. riavvii Oom',
    'stats.hash_restarts'                                      => 'Tot. riavvii Hash',
    'stats.manual_restarts'                                    => 'Tot. riavvii manuali',
    'stats.misses'                                             => 'Mancati',
    'stats.blacklist_misses'                                   => 'Mancati in base a blacklist',
    'stats.blacklist_miss_ratio'                               => 'Percentuale mancati',
    'stats.opcache_hit_rate'                                   => 'OPCache percentuale successi',

    'config.title'                                             => 'Configurazione',
    'config.opcache.enable'                                    => 'Abilitato',
    'config.opcache.enable.description'                        => 'Determina se Zend OPCache è abilitata.',
    'config.opcache.enable_cli'                                => 'Abilita per CLI',
    'config.opcache.enable_cli.description'                    => 'Determina se Zend OPCache è abilitata per la versione CLI di PHP.',
    'config.opcache.use_cwd'                                   => 'Usa spazio di nomi per le key',
    'config.opcache.use_cwd.description'                       => 'Quando questa direttiva è abilitata, OPCache utilizza la directory di lavoro corrente (CWD) come namespace delle key. Disabilitare questa direttiva migliora le prestazioni, ma può corrompere applicazioni esistenti.',
    'config.opcache.validate_timestamps'                       => 'Valida i timestamp',
    'config.opcache.validate_timestamps.description'           => 'Quando disabilitata, dovrai invalidare la cache manualmente (o riavviare il webserver) per applicare i cambiamenti. Quando abilitata, i cambiamenti verranno rilevati automaticamente.',
    'config.opcache.dups_fix'                                  => 'Dups fix', // @TODO
    'config.opcache.dups_fix.description'                      => '', // @TODO
    'config.opcache.revalidate_path'                           => 'Ri-valida percorsi',
    'config.opcache.revalidate_path.description'               => 'Abilita o disabilita l\'ottimizzazione per i file cercati nella "include_path".',
    'config.opcache.log_verbosity_level'                       => 'Accuratezza dei Log',
    'config.opcache.log_verbosity_level.description'           => 'Tutti gli errori di OPCache sono scritti nel log del webserver. Di default solo gli errori fatali (livello 0) o gli errori (livello 1) sono loggati. Puoi anche abilitare gli avvertimenti (livello 3) o i messaggi di debug (livello 4).',
    'config.opcache.memory_consumption'                        => 'Memoria massima',
    'config.opcache.memory_consumption.description'            => 'La memoria massima condivisa utilizzabile da OPCache.',
    'config.opcache.interned_strings_buffer'                   => 'Memoria massima stringhe internate',
    'config.opcache.interned_strings_buffer.description'       => 'La memoria massima in MB utilizzabile dal buffer delle stringhe internate.',
    'config.opcache.max_accelerated_files'                     => 'Tot. massimo dei file inseribili nella cache',
    'config.opcache.max_accelerated_files.description'         => 'Il totale massimo degli script inseribili nella cache. Solo numeri tra 200 e 100000 sono consentiti.',
    'config.opcache.max_wasted_percentage'                     => 'Limite memoria sprecata',
    'config.opcache.max_wasted_percentage.description'         => 'La percentuale massima di memoria sprecata prima che un riavvio sia automaticamente programmato.',
    'config.opcache.consistency_checks'                        => 'Frequenza controlli di coerenza',
    'config.opcache.consistency_checks.description'            => 'Controlla i checksum della cache ogni TOT richieste. Se "0" il controllo è disabilitato.',
    'config.opcache.force_restart_timeout'                     => 'Tempo di riavvio automatico se la cache non è letta',
    'config.opcache.force_restart_timeout.description'         => 'Quanto tempo aspettare (in secondi) per riavviare automaticamente se la cache non è letta.',
    'config.opcache.revalidate_freq'                           => 'Frequenza rilevamento cambiamenti',
    'config.opcache.revalidate_freq.description'               => 'Quanto frequentemente (in secondi) i timestamp dei file verranno ricontrollati per rilevarne i cambiamenti. "1" significa ricontrolla una volta al secondo, ma una sola volta per richiesta. "0" significa ricontrolla sempre.',
    'config.opcache.preferred_memory_model'                    => '',
    'config.opcache.preferred_memory_model.description'        => 'Modello della memoria preferito. Lasciare vuoto per far decidere al sistema.',
    'config.opcache.blacklist_filename'                        => 'Nome del file della blacklist',
    'config.opcache.blacklist_filename.description'            => 'Il percorso del file della blacklist (wildcard * è consentito). Ogni file consiste in una lista di percorsi che devono essere esclusi dalla cache, un percorso per linea. Il percorso può essere un percorso completo o solo un prefisso; ad esempio "/var/www/x" blocca tutti i file e cartelle in /var/www che iniziano per la lettera "x". Le righe che iniziano per ; verranno ignorate (commenti).',
    'config.opcache.max_file_size'                             => 'Dimensione massima dei file inseribili nella cache',
    'config.opcache.max_file_size.description'                 => 'Esclude dalla cache i file più grandi del valore specificato. Se zero il filtro non viene applicato e pertanto ogni file verrà inserito nella cache.',
    'config.opcache.error_log'                                 => 'Log degli errori',
    'config.opcache.error_log.description'                     => 'Il nome del file contenente i log di OPcache. Se vuoto utilizza "stderr".',
    'config.opcache.protect_memory'                            => 'Proteggi memoria',
    'config.opcache.protect_memory.description'                => 'Protegge la memoria condivisa dalla scrittura accidentale durante l\'esecuzione degli script. Utile per il debug di OPCache.',
    'config.opcache.save_comments'                             => 'Preserva i commenti',
    'config.opcache.save_comments.description'                 => 'Se disabilitato i PHPDoc verranno eliminati dal codice per ridurre la dimensione dei file ottimizzati.',
    'config.opcache.fast_shutdown'                             => 'Spegnimento veloce',
    'config.opcache.fast_shutdown.description'                 => 'Se abilitato, lo spegnimento veloce è abilitato per il codice accelerato.',
    'config.opcache.enable_file_override'                      => 'Ottimizza funzioni file',
    'config.opcache.enable_file_override.description'          => 'Ridefinisce la funzione "file_exists()" e simili per migliori prestazioni.',
    'config.opcache.optimization_level'                        => 'Livello di ottimizzazione',
    'config.opcache.optimization_level.description'            => 'Una bitmask dove ogni bit abilita o disabilita i relativi passaggi della OPCache.',
    'config.opcache.mmap_base'                                 => 'Mmap base',
    'config.opcache.mmap_base.description'                     => 'La base usata per i segmenti di memoria condivisa su Windows. Tutti i processi PHP devono mappare la memoria condivisa allo stesso indirizzo. Questa direttiva consente di aggirare gli errori "Unable to reattach to base address".',
    'config.opcache.restrict_api'                              => 'Restringi utilizzo API',
    'config.opcache.restrict_api.description'                  => 'Consente l\'utilizzo delle funzioni di OPcache solo se il percorso del file inizia per la string specificata. Se vuota, nessuna restrizione verrà applicata.',
    'config.opcache.file_update_protection'                    => 'Protezione aggiornamento dei file',
    'config.opcache.file_update_protection.description'        => 'Previene che file troppo giovani vengano aggiunti alla cache. Ad esempio, file ancora in fase di caricamento e quindi incompleti. Invece, se i file sono caricati in maniera "atomica" sul tuo sistema e dal tuo client, è consigliato impostare questo valore a "0" in quanto garantisce migliori prestazioni.',
    'config.opcache.huge_code_pages'                           => 'Huge code pages', // @TODO
    'config.opcache.huge_code_pages.description'               => 'Enables or disables copying of PHP code (text segment) into HUGE PAGES. This should improve performance, but requires appropriate OS configuration.', // @TODO
    'config.opcache.lockfile_path'                             => 'Percorso file di lock',
    'config.opcache.lockfile_path.description'                 => 'Percorso assoluto utilizzato per salvare i file di lock condivisi (utilizzato solo su *nix)',
    'config.opcache.file_cache'                                => 'Cache su disco',
    'config.opcache.file_cache.description'                    => 'Abilita e imposta la directory per la cache di secondo livello. Migliora le performance quando la memoria condivisa è satura, ad esempio al riavvio del server o quando la memoria condivisa è resettata. Se vuoto, la memoria su disco viene disabilitata.',
    'config.opcache.file_cache_only'                           => 'Usa cache su disco come cache primaria',
    'config.opcache.file_cache_only.description'               => 'Abilita o disabilita la memoria condivisa e utilizza solo il disco.',
    'config.opcache.file_cache_consistency_checks'             => 'Valida i file caricati da cache',
    'config.opcache.file_cache_consistency_checks.description' => 'Esegue il checksum per i file caricati da cache.',
    'config.opcache.file_cache_fallback'                       => 'File cache fallback',
    'config.opcache.file_cache_fallback.description'           => 'Richiede che "Usa cache su disco come cache primaria" sia abilitato; ha effetto solo su Windows. Usa la memoria su disco quando un processo non riesce ad accedere alla memoria condivisa.',
    'config.opcache.validate_permission'                       => 'Valida i permessi',
    'config.opcache.validate_permission.description'           => 'Controlla che l\'utente corrente abbia i permessi per accedere al file nella cache.',
    'config.opcache.validate_root'                             => 'Validate root', // @TODO
    'config.opcache.validate_root.description'                 => 'Prevents name collisions in chroot\'ed environments. This should be enabled in all chroot\'ed environments to prevent access to files outside the chroot.', // @TODO

    'blacklist.title'                                          => 'Lista nera',
    'blacklist.empty'                                          => 'Nessuno script è in lista nera',

    'scripts.title'                                            => 'Script nella cache',
    'scripts.overview.title'                                   => 'Riepilogo',
    'scripts.empty'                                            => 'Nessuno script è nella cache',
    'scripts.directory.script_count'                           => ' (<i class="count">%s</i> file)',
    'scripts.full_path'                                        => 'Nome file',
    'scripts.hits'                                             => 'Accessi',
    'scripts.memory_consumption'                               => 'Memoria',
    'scripts.last_used_timestamp'                              => 'Ultimo utilizzo',
    'scripts.timestamp'                                        => 'Creazione',
    'scripts.actions'                                          => 'Azioni',
    'script.invalidate'                                        => 'Invalida',
    'scripts.filter.placeholder'                               => 'Filtra script nella cache',

    'graph.title'                                              => 'Grafici',
    'graph.memory.title'                                       => 'Memoria',
    'graph.memory.free'                                        => 'libera',
    'graph.memory.used'                                        => 'usata',
    'graph.memory.wasted'                                      => 'sprecata',
    'graph.keys.title'                                         => 'Key',
    'graph.keys.free'                                          => 'libere',
    'graph.keys.scripts'                                       => 'usate',
    'graph.keys.wasted'                                        => 'sprecate',
    'graph.hits.title'                                         => 'Accessi',
    'graph.hits.hits'                                          => 'accessi',
    'graph.hits.misses'                                        => 'mancati',
    'graph.hits.blacklist'                                     => 'lista nera'
];
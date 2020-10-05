<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit75c43f23d14b9f1682133322f53efd68
{
    public static $files = array (
        '7745382c92b7799bf1294b1f43023ba2' => __DIR__ . '/..' . '/tracy/tracy/src/shortcuts.php',
        'd643d51914962a7c9ff0596cb1d85e7b' => __DIR__ . '/../..' . '/internal-functions.php',
        '242a231e739f1a21b2fbd28c3eff1b48' => __DIR__ . '/../..' . '/public-functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'V' => 
        array (
            'VersionPress\\' => 13,
        ),
        'S' => 
        array (
            'Symfony\\Component\\Yaml\\' => 23,
            'Symfony\\Component\\Process\\' => 26,
            'Symfony\\Component\\Filesystem\\' => 29,
            'SqlParser\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'VersionPress\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Symfony\\Component\\Yaml\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/yaml',
        ),
        'Symfony\\Component\\Process\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/process',
        ),
        'Symfony\\Component\\Filesystem\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/filesystem',
        ),
        'SqlParser\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'M' => 
        array (
            'Michelf' => 
            array (
                0 => __DIR__ . '/..' . '/michelf/php-markdown',
            ),
        ),
    );

    public static $classMap = array (
        'Michelf\\Markdown' => __DIR__ . '/..' . '/michelf/php-markdown/Michelf/Markdown.php',
        'Michelf\\MarkdownExtra' => __DIR__ . '/..' . '/michelf/php-markdown/Michelf/MarkdownExtra.php',
        'Michelf\\MarkdownInterface' => __DIR__ . '/..' . '/michelf/php-markdown/Michelf/MarkdownInterface.php',
        'Nette\\ArgumentOutOfRangeException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\DeprecatedException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\DirectoryNotFoundException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\FileNotFoundException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\IOException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\InvalidArgumentException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\InvalidStateException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\Iterators\\CachingIterator' => __DIR__ . '/..' . '/nette/utils/src/Iterators/CachingIterator.php',
        'Nette\\Iterators\\Filter' => __DIR__ . '/..' . '/nette/utils/src/Iterators/Filter.php',
        'Nette\\Iterators\\Mapper' => __DIR__ . '/..' . '/nette/utils/src/Iterators/Mapper.php',
        'Nette\\Iterators\\RecursiveFilter' => __DIR__ . '/..' . '/nette/utils/src/Iterators/RecursiveFilter.php',
        'Nette\\Localization\\ITranslator' => __DIR__ . '/..' . '/nette/utils/src/Utils/ITranslator.php',
        'Nette\\MemberAccessException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\NotImplementedException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\NotSupportedException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\Object' => __DIR__ . '/..' . '/nette/utils/src/Utils/Object.php',
        'Nette\\OutOfRangeException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\SmartObject' => __DIR__ . '/..' . '/nette/utils/src/Utils/SmartObject.php',
        'Nette\\StaticClass' => __DIR__ . '/..' . '/nette/utils/src/Utils/StaticClass.php',
        'Nette\\StaticClassException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\UnexpectedValueException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\Utils\\ArrayHash' => __DIR__ . '/..' . '/nette/utils/src/Utils/ArrayHash.php',
        'Nette\\Utils\\ArrayList' => __DIR__ . '/..' . '/nette/utils/src/Utils/ArrayList.php',
        'Nette\\Utils\\Arrays' => __DIR__ . '/..' . '/nette/utils/src/Utils/Arrays.php',
        'Nette\\Utils\\AssertionException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\Utils\\Callback' => __DIR__ . '/..' . '/nette/utils/src/Utils/Callback.php',
        'Nette\\Utils\\DateTime' => __DIR__ . '/..' . '/nette/utils/src/Utils/DateTime.php',
        'Nette\\Utils\\FileSystem' => __DIR__ . '/..' . '/nette/utils/src/Utils/FileSystem.php',
        'Nette\\Utils\\Html' => __DIR__ . '/..' . '/nette/utils/src/Utils/Html.php',
        'Nette\\Utils\\IHtmlString' => __DIR__ . '/..' . '/nette/utils/src/Utils/IHtmlString.php',
        'Nette\\Utils\\Image' => __DIR__ . '/..' . '/nette/utils/src/Utils/Image.php',
        'Nette\\Utils\\ImageException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\Utils\\Json' => __DIR__ . '/..' . '/nette/utils/src/Utils/Json.php',
        'Nette\\Utils\\JsonException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\Utils\\ObjectMixin' => __DIR__ . '/..' . '/nette/utils/src/Utils/ObjectMixin.php',
        'Nette\\Utils\\Paginator' => __DIR__ . '/..' . '/nette/utils/src/Utils/Paginator.php',
        'Nette\\Utils\\Random' => __DIR__ . '/..' . '/nette/utils/src/Utils/Random.php',
        'Nette\\Utils\\Reflection' => __DIR__ . '/..' . '/nette/utils/src/Utils/Reflection.php',
        'Nette\\Utils\\RegexpException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\Utils\\Strings' => __DIR__ . '/..' . '/nette/utils/src/Utils/Strings.php',
        'Nette\\Utils\\UnknownImageFileException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\Utils\\Validators' => __DIR__ . '/..' . '/nette/utils/src/Utils/Validators.php',
        'SqlParser\\Component' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Component.php',
        'SqlParser\\Components\\AlterOperation' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Components/AlterOperation.php',
        'SqlParser\\Components\\Array2d' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Components/Array2d.php',
        'SqlParser\\Components\\ArrayObj' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Components/ArrayObj.php',
        'SqlParser\\Components\\Condition' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Components/Condition.php',
        'SqlParser\\Components\\CreateDefinition' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Components/CreateDefinition.php',
        'SqlParser\\Components\\DataType' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Components/DataType.php',
        'SqlParser\\Components\\Expression' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Components/Expression.php',
        'SqlParser\\Components\\ExpressionArray' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Components/ExpressionArray.php',
        'SqlParser\\Components\\FunctionCall' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Components/FunctionCall.php',
        'SqlParser\\Components\\IntoKeyword' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Components/IntoKeyword.php',
        'SqlParser\\Components\\JoinKeyword' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Components/JoinKeyword.php',
        'SqlParser\\Components\\Key' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Components/Key.php',
        'SqlParser\\Components\\Limit' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Components/Limit.php',
        'SqlParser\\Components\\OptionsArray' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Components/OptionsArray.php',
        'SqlParser\\Components\\OrderKeyword' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Components/OrderKeyword.php',
        'SqlParser\\Components\\ParameterDefinition' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Components/ParameterDefinition.php',
        'SqlParser\\Components\\PartitionDefinition' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Components/PartitionDefinition.php',
        'SqlParser\\Components\\Reference' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Components/Reference.php',
        'SqlParser\\Components\\RenameOperation' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Components/RenameOperation.php',
        'SqlParser\\Components\\SetOperation' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Components/SetOperation.php',
        'SqlParser\\Components\\UnionKeyword' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Components/UnionKeyword.php',
        'SqlParser\\Context' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Context.php',
        'SqlParser\\Contexts\\ContextMySql50000' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Contexts/ContextMySql50000.php',
        'SqlParser\\Contexts\\ContextMySql50100' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Contexts/ContextMySql50100.php',
        'SqlParser\\Contexts\\ContextMySql50500' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Contexts/ContextMySql50500.php',
        'SqlParser\\Contexts\\ContextMySql50600' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Contexts/ContextMySql50600.php',
        'SqlParser\\Contexts\\ContextMySql50700' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Contexts/ContextMySql50700.php',
        'SqlParser\\Exceptions\\LexerException' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Exceptions/LexerException.php',
        'SqlParser\\Exceptions\\ParserException' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Exceptions/ParserException.php',
        'SqlParser\\Lexer' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Lexer.php',
        'SqlParser\\Parser' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Parser.php',
        'SqlParser\\Statement' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Statement.php',
        'SqlParser\\Statements\\AlterStatement' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Statements/AlterStatement.php',
        'SqlParser\\Statements\\AnalyzeStatement' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Statements/AnalyzeStatement.php',
        'SqlParser\\Statements\\BackupStatement' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Statements/BackupStatement.php',
        'SqlParser\\Statements\\CallStatement' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Statements/CallStatement.php',
        'SqlParser\\Statements\\CheckStatement' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Statements/CheckStatement.php',
        'SqlParser\\Statements\\ChecksumStatement' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Statements/ChecksumStatement.php',
        'SqlParser\\Statements\\CreateStatement' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Statements/CreateStatement.php',
        'SqlParser\\Statements\\DeleteStatement' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Statements/DeleteStatement.php',
        'SqlParser\\Statements\\DropStatement' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Statements/DropStatement.php',
        'SqlParser\\Statements\\ExplainStatement' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Statements/ExplainStatement.php',
        'SqlParser\\Statements\\InsertStatement' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Statements/InsertStatement.php',
        'SqlParser\\Statements\\MaintenanceStatement' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Statements/MaintenanceStatement.php',
        'SqlParser\\Statements\\NotImplementedStatement' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Statements/NotImplementedStatement.php',
        'SqlParser\\Statements\\OptimizeStatement' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Statements/OptimizeStatement.php',
        'SqlParser\\Statements\\RenameStatement' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Statements/RenameStatement.php',
        'SqlParser\\Statements\\RepairStatement' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Statements/RepairStatement.php',
        'SqlParser\\Statements\\ReplaceStatement' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Statements/ReplaceStatement.php',
        'SqlParser\\Statements\\RestoreStatement' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Statements/RestoreStatement.php',
        'SqlParser\\Statements\\SelectStatement' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Statements/SelectStatement.php',
        'SqlParser\\Statements\\SetStatement' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Statements/SetStatement.php',
        'SqlParser\\Statements\\ShowStatement' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Statements/ShowStatement.php',
        'SqlParser\\Statements\\TransactionStatement' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Statements/TransactionStatement.php',
        'SqlParser\\Statements\\TruncateStatement' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Statements/TruncateStatement.php',
        'SqlParser\\Statements\\UpdateStatement' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Statements/UpdateStatement.php',
        'SqlParser\\Token' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Token.php',
        'SqlParser\\TokensList' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/TokensList.php',
        'SqlParser\\UtfString' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/UtfString.php',
        'SqlParser\\Utils\\BufferedQuery' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Utils/BufferedQuery.php',
        'SqlParser\\Utils\\Error' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Utils/Error.php',
        'SqlParser\\Utils\\Formatter' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Utils/Formatter.php',
        'SqlParser\\Utils\\Misc' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Utils/Misc.php',
        'SqlParser\\Utils\\Query' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Utils/Query.php',
        'SqlParser\\Utils\\Routine' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Utils/Routine.php',
        'SqlParser\\Utils\\Table' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Utils/Table.php',
        'SqlParser\\Utils\\Tokens' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Utils/Tokens.php',
        'Symfony\\Component\\Filesystem\\Exception\\ExceptionInterface' => __DIR__ . '/..' . '/symfony/filesystem/Exception/ExceptionInterface.php',
        'Symfony\\Component\\Filesystem\\Exception\\FileNotFoundException' => __DIR__ . '/..' . '/symfony/filesystem/Exception/FileNotFoundException.php',
        'Symfony\\Component\\Filesystem\\Exception\\IOException' => __DIR__ . '/..' . '/symfony/filesystem/Exception/IOException.php',
        'Symfony\\Component\\Filesystem\\Exception\\IOExceptionInterface' => __DIR__ . '/..' . '/symfony/filesystem/Exception/IOExceptionInterface.php',
        'Symfony\\Component\\Filesystem\\Filesystem' => __DIR__ . '/..' . '/symfony/filesystem/Filesystem.php',
        'Symfony\\Component\\Filesystem\\LockHandler' => __DIR__ . '/..' . '/symfony/filesystem/LockHandler.php',
        'Symfony\\Component\\Process\\Exception\\ExceptionInterface' => __DIR__ . '/..' . '/symfony/process/Exception/ExceptionInterface.php',
        'Symfony\\Component\\Process\\Exception\\InvalidArgumentException' => __DIR__ . '/..' . '/symfony/process/Exception/InvalidArgumentException.php',
        'Symfony\\Component\\Process\\Exception\\LogicException' => __DIR__ . '/..' . '/symfony/process/Exception/LogicException.php',
        'Symfony\\Component\\Process\\Exception\\ProcessFailedException' => __DIR__ . '/..' . '/symfony/process/Exception/ProcessFailedException.php',
        'Symfony\\Component\\Process\\Exception\\ProcessTimedOutException' => __DIR__ . '/..' . '/symfony/process/Exception/ProcessTimedOutException.php',
        'Symfony\\Component\\Process\\Exception\\RuntimeException' => __DIR__ . '/..' . '/symfony/process/Exception/RuntimeException.php',
        'Symfony\\Component\\Process\\ExecutableFinder' => __DIR__ . '/..' . '/symfony/process/ExecutableFinder.php',
        'Symfony\\Component\\Process\\InputStream' => __DIR__ . '/..' . '/symfony/process/InputStream.php',
        'Symfony\\Component\\Process\\PhpExecutableFinder' => __DIR__ . '/..' . '/symfony/process/PhpExecutableFinder.php',
        'Symfony\\Component\\Process\\PhpProcess' => __DIR__ . '/..' . '/symfony/process/PhpProcess.php',
        'Symfony\\Component\\Process\\Pipes\\AbstractPipes' => __DIR__ . '/..' . '/symfony/process/Pipes/AbstractPipes.php',
        'Symfony\\Component\\Process\\Pipes\\PipesInterface' => __DIR__ . '/..' . '/symfony/process/Pipes/PipesInterface.php',
        'Symfony\\Component\\Process\\Pipes\\UnixPipes' => __DIR__ . '/..' . '/symfony/process/Pipes/UnixPipes.php',
        'Symfony\\Component\\Process\\Pipes\\WindowsPipes' => __DIR__ . '/..' . '/symfony/process/Pipes/WindowsPipes.php',
        'Symfony\\Component\\Process\\Process' => __DIR__ . '/..' . '/symfony/process/Process.php',
        'Symfony\\Component\\Process\\ProcessBuilder' => __DIR__ . '/..' . '/symfony/process/ProcessBuilder.php',
        'Symfony\\Component\\Process\\ProcessUtils' => __DIR__ . '/..' . '/symfony/process/ProcessUtils.php',
        'Symfony\\Component\\Yaml\\Dumper' => __DIR__ . '/..' . '/symfony/yaml/Dumper.php',
        'Symfony\\Component\\Yaml\\Escaper' => __DIR__ . '/..' . '/symfony/yaml/Escaper.php',
        'Symfony\\Component\\Yaml\\Exception\\DumpException' => __DIR__ . '/..' . '/symfony/yaml/Exception/DumpException.php',
        'Symfony\\Component\\Yaml\\Exception\\ExceptionInterface' => __DIR__ . '/..' . '/symfony/yaml/Exception/ExceptionInterface.php',
        'Symfony\\Component\\Yaml\\Exception\\ParseException' => __DIR__ . '/..' . '/symfony/yaml/Exception/ParseException.php',
        'Symfony\\Component\\Yaml\\Exception\\RuntimeException' => __DIR__ . '/..' . '/symfony/yaml/Exception/RuntimeException.php',
        'Symfony\\Component\\Yaml\\Inline' => __DIR__ . '/..' . '/symfony/yaml/Inline.php',
        'Symfony\\Component\\Yaml\\Parser' => __DIR__ . '/..' . '/symfony/yaml/Parser.php',
        'Symfony\\Component\\Yaml\\Unescaper' => __DIR__ . '/..' . '/symfony/yaml/Unescaper.php',
        'Symfony\\Component\\Yaml\\Yaml' => __DIR__ . '/..' . '/symfony/yaml/Yaml.php',
        'Tracy\\Bar' => __DIR__ . '/..' . '/tracy/tracy/src/Tracy/Bar.php',
        'Tracy\\BlueScreen' => __DIR__ . '/..' . '/tracy/tracy/src/Tracy/BlueScreen.php',
        'Tracy\\Bridges\\Nette\\TracyExtension' => __DIR__ . '/..' . '/tracy/tracy/src/Bridges/Nette/TracyExtension.php',
        'Tracy\\Debugger' => __DIR__ . '/..' . '/tracy/tracy/src/Tracy/Debugger.php',
        'Tracy\\DefaultBarPanel' => __DIR__ . '/..' . '/tracy/tracy/src/Tracy/DefaultBarPanel.php',
        'Tracy\\Dumper' => __DIR__ . '/..' . '/tracy/tracy/src/Tracy/Dumper.php',
        'Tracy\\FireLogger' => __DIR__ . '/..' . '/tracy/tracy/src/Tracy/FireLogger.php',
        'Tracy\\Helpers' => __DIR__ . '/..' . '/tracy/tracy/src/Tracy/Helpers.php',
        'Tracy\\IBarPanel' => __DIR__ . '/..' . '/tracy/tracy/src/Tracy/IBarPanel.php',
        'Tracy\\ILogger' => __DIR__ . '/..' . '/tracy/tracy/src/Tracy/ILogger.php',
        'Tracy\\Logger' => __DIR__ . '/..' . '/tracy/tracy/src/Tracy/Logger.php',
        'Tracy\\OutputDebugger' => __DIR__ . '/..' . '/tracy/tracy/src/Tracy/OutputDebugger.php',
        'VersionPress\\Actions\\ActionsDefinitionRepository' => __DIR__ . '/../..' . '/src/Actions/ActionsDefinitionRepository.php',
        'VersionPress\\Actions\\ActionsInfo' => __DIR__ . '/../..' . '/src/Actions/ActionsInfo.php',
        'VersionPress\\Actions\\ActionsInfoProvider' => __DIR__ . '/../..' . '/src/Actions/ActionsInfoProvider.php',
        'VersionPress\\Actions\\PluginDefinitionDiscovery' => __DIR__ . '/../..' . '/src/Actions/PluginDefinitionDiscovery.php',
        'VersionPress\\Api\\VersionPressApi' => __DIR__ . '/../..' . '/src/Api/VersionPressApi.php',
        'VersionPress\\ChangeInfos\\BulkChangeInfo' => __DIR__ . '/../..' . '/src/ChangeInfos/BulkChangeInfo.php',
        'VersionPress\\ChangeInfos\\ChangeInfo' => __DIR__ . '/../..' . '/src/ChangeInfos/ChangeInfo.php',
        'VersionPress\\ChangeInfos\\ChangeInfoEnvelope' => __DIR__ . '/../..' . '/src/ChangeInfos/ChangeInfoEnvelope.php',
        'VersionPress\\ChangeInfos\\ChangeInfoFactory' => __DIR__ . '/../..' . '/src/ChangeInfos/ChangeInfoFactory.php',
        'VersionPress\\ChangeInfos\\ChangeInfoUtils' => __DIR__ . '/../..' . '/src/ChangeInfos/ChangeInfoUtils.php',
        'VersionPress\\ChangeInfos\\CommitMessageParser' => __DIR__ . '/../..' . '/src/ChangeInfos/CommitMessageParser.php',
        'VersionPress\\ChangeInfos\\EntityChangeInfo' => __DIR__ . '/../..' . '/src/ChangeInfos/EntityChangeInfo.php',
        'VersionPress\\ChangeInfos\\TrackedChangeInfo' => __DIR__ . '/../..' . '/src/ChangeInfos/TrackedChangeInfo.php',
        'VersionPress\\ChangeInfos\\UntrackedChangeInfo' => __DIR__ . '/../..' . '/src/ChangeInfos/UntrackedChangeInfo.php',
        'VersionPress\\Cli\\SilentUpgraderSkin' => __DIR__ . '/../..' . '/src/Cli/SilentUpgraderSkin.php',
        'VersionPress\\Cli\\VPCommand' => __DIR__ . '/../..' . '/src/Cli/vp.php',
        'VersionPress\\Cli\\VPCommandUtils' => __DIR__ . '/../..' . '/src/Cli/VPCommandUtils.php',
        'VersionPress\\Cli\\VPComposerCommand' => __DIR__ . '/../..' . '/src/Cli/vp-composer.php',
        'VersionPress\\Cli\\VPInternalCommand' => __DIR__ . '/../..' . '/src/Cli/vp-internal.php',
        'VersionPress\\DI\\DIContainer' => __DIR__ . '/../..' . '/src/DI/DIContainer.php',
        'VersionPress\\DI\\VersionPressServices' => __DIR__ . '/../..' . '/src/DI/VersionPressServices.php',
        'VersionPress\\Database\\Database' => __DIR__ . '/../..' . '/src/Database/Database.php',
        'VersionPress\\Database\\DbSchemaInfo' => __DIR__ . '/../..' . '/src/Database/DbSchemaInfo.php',
        'VersionPress\\Database\\EntityInfo' => __DIR__ . '/../..' . '/src/Database/EntityInfo.php',
        'VersionPress\\Database\\ParsedQueryData' => __DIR__ . '/../..' . '/src/Database/ParsedQueryData.php',
        'VersionPress\\Database\\ShortcodesInfo' => __DIR__ . '/../..' . '/src/Database/ShortcodesInfo.php',
        'VersionPress\\Database\\ShortcodesReplacer' => __DIR__ . '/../..' . '/src/Database/ShortcodesReplacer.php',
        'VersionPress\\Database\\SqlQueryParser' => __DIR__ . '/../..' . '/src/Database/SqlQueryParser.php',
        'VersionPress\\Database\\TableSchemaStorage' => __DIR__ . '/../..' . '/src/Database/TableSchemaStorage.php',
        'VersionPress\\Database\\VpidRepository' => __DIR__ . '/../..' . '/src/Database/VpidRepository.php',
        'VersionPress\\Database\\WpdbMirrorBridge' => __DIR__ . '/../..' . '/src/Database/WpdbMirrorBridge.php',
        'VersionPress\\Git\\ChangeInfoPreprocessors\\ChangeInfoPreprocessor' => __DIR__ . '/../..' . '/src/Git/ChangeInfoPreprocessors/ChangeInfoPreprocessor.php',
        'VersionPress\\Git\\ChangeInfoPreprocessors\\PostChangeInfoPreprocessor' => __DIR__ . '/../..' . '/src/Git/ChangeInfoPreprocessors/PostChangeInfoPreprocessor.php',
        'VersionPress\\Git\\ChangeInfoPreprocessors\\PostTermSplittingPreprocessor' => __DIR__ . '/../..' . '/src/Git/ChangeInfoPreprocessors/PostTermSplittingPreprocessor.php',
        'VersionPress\\Git\\ChangeInfoPreprocessors\\TermTaxonomyPreprocessor' => __DIR__ . '/../..' . '/src/Git/ChangeInfoPreprocessors/TermTaxonomyPreprocessor.php',
        'VersionPress\\Git\\ChangeInfoPreprocessors\\UpdateActionChangeInfoPreprocessor' => __DIR__ . '/../..' . '/src/Git/ChangeInfoPreprocessors/UpdateActionChangeInfoPreprocessor.php',
        'VersionPress\\Git\\Commit' => __DIR__ . '/../..' . '/src/Git/Commit.php',
        'VersionPress\\Git\\CommitMessage' => __DIR__ . '/../..' . '/src/Git/CommitMessage.php',
        'VersionPress\\Git\\Committer' => __DIR__ . '/../..' . '/src/Git/Committer.php',
        'VersionPress\\Git\\GitConfig' => __DIR__ . '/../..' . '/src/Git/GitConfig.php',
        'VersionPress\\Git\\GitLogPaginator' => __DIR__ . '/../..' . '/src/Git/GitLogPaginator.php',
        'VersionPress\\Git\\GitRepository' => __DIR__ . '/../..' . '/src/Git/GitRepository.php',
        'VersionPress\\Git\\MergeDriverInstaller' => __DIR__ . '/../..' . '/src/Git/MergeDriverInstaller.php',
        'VersionPress\\Git\\RevertStatus' => __DIR__ . '/../..' . '/src/Git/RevertStatus.php',
        'VersionPress\\Git\\Reverter' => __DIR__ . '/../..' . '/src/Git/Reverter.php',
        'VersionPress\\Initialization\\InitializationAbortedException' => __DIR__ . '/../..' . '/src/Initialization/InitializationAbortedException.php',
        'VersionPress\\Initialization\\InitializationConfig' => __DIR__ . '/../..' . '/src/Initialization/InitializationConfig.php',
        'VersionPress\\Initialization\\Initializer' => __DIR__ . '/../..' . '/src/Initialization/Initializer.php',
        'VersionPress\\Initialization\\InitializerStates' => __DIR__ . '/../..' . '/src/Initialization/InitializerStates.php',
        'VersionPress\\Initialization\\ReplacerMethods' => __DIR__ . '/../..' . '/src/Initialization/ReplacerMethods.src.php',
        'VersionPress\\Initialization\\VersionPressOptions' => __DIR__ . '/../..' . '/src/Initialization/VersionPressOptions.php',
        'VersionPress\\Initialization\\WpConfigSplitter' => __DIR__ . '/../..' . '/src/Initialization/WpConfigSplitter.php',
        'VersionPress\\Initialization\\WpdbReplacer' => __DIR__ . '/../..' . '/src/Initialization/WpdbReplacer.php',
        'VersionPress\\Storages\\DirectoryStorage' => __DIR__ . '/../..' . '/src/Storages/DirectoryStorage.php',
        'VersionPress\\Storages\\MetaEntityStorage' => __DIR__ . '/../..' . '/src/Storages/MetaEntityStorage.php',
        'VersionPress\\Storages\\Mirror' => __DIR__ . '/../..' . '/src/Storages/Mirror.php',
        'VersionPress\\Storages\\MnReferenceStorage' => __DIR__ . '/../..' . '/src/Storages/MnReferenceStorage.php',
        'VersionPress\\Storages\\Serialization\\IniSerializer' => __DIR__ . '/../..' . '/src/Storages/Serialization/IniSerializer.php',
        'VersionPress\\Storages\\Serialization\\SerializedDataToIniConverter' => __DIR__ . '/../..' . '/src/Storages/Serialization/SerializedDataToIniConverter.php',
        'VersionPress\\Storages\\Storage' => __DIR__ . '/../..' . '/src/Storages/Storage.php',
        'VersionPress\\Storages\\StorageFactory' => __DIR__ . '/../..' . '/src/Storages/StorageFactory.php',
        'VersionPress\\Synchronizers\\SynchronizationProcess' => __DIR__ . '/../..' . '/src/Synchronizers/SynchronizationProcess.php',
        'VersionPress\\Synchronizers\\Synchronizer' => __DIR__ . '/../..' . '/src/Synchronizers/Synchronizer.php',
        'VersionPress\\Synchronizers\\SynchronizerFactory' => __DIR__ . '/../..' . '/src/Synchronizers/SynchronizerFactory.php',
        'VersionPress\\Utils\\AbsoluteUrlReplacer' => __DIR__ . '/../..' . '/src/Utils/AbsoluteUrlReplacer.php',
        'VersionPress\\Utils\\ArrayUtils' => __DIR__ . '/../..' . '/src/Utils/ArrayUtils.php',
        'VersionPress\\Utils\\AutocompleteUtils' => __DIR__ . '/../..' . '/src/Utils/AutocompleteUtils.php',
        'VersionPress\\Utils\\Comparators' => __DIR__ . '/../..' . '/src/Utils/Comparators.php',
        'VersionPress\\Utils\\CompatibilityChecker' => __DIR__ . '/../..' . '/src/Utils/CompatibilityChecker.php',
        'VersionPress\\Utils\\CompatibilityResult' => __DIR__ . '/../..' . '/src/Utils/CompatibilityResult.php',
        'VersionPress\\Utils\\Cursor' => __DIR__ . '/../..' . '/src/Utils/Cursor.php',
        'VersionPress\\Utils\\EntityUtils' => __DIR__ . '/../..' . '/src/Utils/EntityUtils.php',
        'VersionPress\\Utils\\FileSystem' => __DIR__ . '/../..' . '/src/Utils/FileSystem.php',
        'VersionPress\\Utils\\IdUtil' => __DIR__ . '/../..' . '/src/Utils/IdUtil.php',
        'VersionPress\\Utils\\JsRedirect' => __DIR__ . '/../..' . '/src/Utils/JsRedirect.php',
        'VersionPress\\Utils\\Markdown' => __DIR__ . '/../..' . '/src/Utils/Markdown.php',
        'VersionPress\\Utils\\Mutex' => __DIR__ . '/../..' . '/src/Utils/Mutex.php',
        'VersionPress\\Utils\\PathUtils' => __DIR__ . '/../..' . '/src/Utils/PathUtils.php',
        'VersionPress\\Utils\\Process' => __DIR__ . '/../..' . '/src/Utils/Process.php',
        'VersionPress\\Utils\\ProcessUtils' => __DIR__ . '/../..' . '/src/Utils/ProcessUtils.php',
        'VersionPress\\Utils\\QueryLanguageUtils' => __DIR__ . '/../..' . '/src/Utils/QueryLanguageUtils.php',
        'VersionPress\\Utils\\ReferenceUtils' => __DIR__ . '/../..' . '/src/Utils/ReferenceUtils.php',
        'VersionPress\\Utils\\RequestDetector' => __DIR__ . '/../..' . '/src/Utils/RequestDetector.php',
        'VersionPress\\Utils\\RequirementsChecker' => __DIR__ . '/../..' . '/src/Utils/RequirementsChecker.php',
        'VersionPress\\Utils\\SecurityUtils' => __DIR__ . '/../..' . '/src/Utils/SecurityUtils.php',
        'VersionPress\\Utils\\SerializedDataCursor' => __DIR__ . '/../..' . '/src/Utils/SerializedDataCursor.php',
        'VersionPress\\Utils\\StringUtils' => __DIR__ . '/../..' . '/src/Utils/StringUtils.php',
        'VersionPress\\Utils\\SystemInfo' => __DIR__ . '/../..' . '/src/Utils/SystemInfo.php',
        'VersionPress\\Utils\\UninstallationUtil' => __DIR__ . '/../..' . '/src/Utils/UninstallationUtil.php',
        'VersionPress\\Utils\\WordPressCacheUtils' => __DIR__ . '/../..' . '/src/Utils/WordPressCacheUtils.php',
        'VersionPress\\Utils\\WordPressMissingFunctions' => __DIR__ . '/../..' . '/src/Utils/WordPressMissingFunctions.php',
        'VersionPress\\Utils\\WorkflowUtils' => __DIR__ . '/../..' . '/src/Utils/WorkflowUtils.php',
        'VersionPress\\Utils\\WpConfigEditor' => __DIR__ . '/../..' . '/src/Utils/WpConfigEditor.php',
        'VersionPress\\Utils\\Zip' => __DIR__ . '/../..' . '/src/Utils/Zip.php',
        'VersionPress\\VersionPress' => __DIR__ . '/../..' . '/src/VersionPress.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit75c43f23d14b9f1682133322f53efd68::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit75c43f23d14b9f1682133322f53efd68::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit75c43f23d14b9f1682133322f53efd68::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit75c43f23d14b9f1682133322f53efd68::$classMap;

        }, null, ClassLoader::class);
    }
}
